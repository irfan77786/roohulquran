/**
 * Admin Notification System
 * Handles real-time notification display and management
 */
(function() {
    'use strict';

    let notificationCount = 0;
    let notificationDropdown = null;

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initializeNotificationSystem();
    });

    function initializeNotificationSystem() {
        // Get notification elements
        const dropdownBtn = document.getElementById('notificationDropdown');
        const countBadge = document.getElementById('notificationCountBadge');
        const listContainer = document.getElementById('notificationsList');
        const markAllBtn = document.getElementById('markAllReadBtn');

        if (!dropdownBtn || !countBadge || !listContainer) {
            console.error('Notification elements not found');
            return;
        }

        notificationDropdown = dropdownBtn;

        // Load count on page load
        loadCount();

        // Listen for dropdown open
        if (dropdownBtn.getAttribute('data-bs-toggle') === 'dropdown') {
            // Bootstrap 5 way
            dropdownBtn.addEventListener('shown.bs.dropdown', function() {
                loadNotifications();
            });
        }

        // Mark all as read button
        if (markAllBtn) {
            markAllBtn.addEventListener('click', function(e) {
                e.preventDefault();
                markAllAsRead();
            });
        }

        // Auto-refresh count every 30 seconds
        setInterval(loadCount, 30000);
    }

    function loadCount() {
        fetch('/admin/notifications/count', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': getCsrfToken()
            }
        })
        .then(response => response.json())
        .then(data => {
            notificationCount = data.count || 0;
            updateBadge(notificationCount);
        })
        .catch(error => {
            console.error('Error loading notification count:', error);
        });
    }

    function loadNotifications() {
        const listContainer = document.getElementById('notificationsList');
        if (!listContainer) return;

        listContainer.innerHTML = '<div class="text-center py-3"><div class="spinner-border spinner-border-sm text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';

        fetch('/admin/notifications', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': getCsrfToken()
            }
        })
        .then(response => response.json())
        .then(notifications => {
            displayNotifications(notifications);
        })
        .catch(error => {
            console.error('Error loading notifications:', error);
            listContainer.innerHTML = '<p class="text-center text-muted py-3">Failed to load notifications</p>';
        });
    }

    function displayNotifications(notifications) {
        const listContainer = document.getElementById('notificationsList');
        if (!listContainer) return;

        if (notifications.length === 0) {
            listContainer.innerHTML = '<p class="text-center text-muted py-3">No notifications</p>';
            return;
        }

        let html = '';
        notifications.forEach(function(notif) {
            const badgeClass = notif.read ? 'bg-light' : 'bg-' + notif.color + ' bg-opacity-10';
            const iconClass = notif.read ? 'text-muted' : 'text-' + notif.color;
            const unreadClass = notif.read ? '' : 'unread-notification';
            
            html += `
                <div class="d-flex gap-3 p-2 hover-bg-light rounded notification-item ${unreadClass}" data-id="${notif.id}">
                    <div class="avatar-xs ${badgeClass} rounded d-flex align-items-center justify-content-center">
                        <i class="${notif.icon} ${iconClass}"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0 small">${escapeHtml(notif.title)}</p>
                        <small class="text-muted">${escapeHtml(notif.message)}</small>
                        <br>
                        <small class="text-muted">${escapeHtml(notif.time_ago)}</small>
                    </div>
                </div>
            `;
        });

        listContainer.innerHTML = html;

        // Add click handlers
        const items = listContainer.querySelectorAll('.notification-item');
        items.forEach(item => {
            item.addEventListener('click', function() {
                const notifId = this.dataset.id;
                markAsRead(notifId, this);
            });
        });
    }

    function markAsRead(notifId, element) {
        if (element.classList.contains('unread-notification')) {
            const formData = new FormData();
            formData.append('_token', getCsrfToken());

            fetch('/admin/notifications/' + notifId + '/read', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': getCsrfToken()
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    element.classList.remove('unread-notification');
                    element.querySelector('[class*="bg-opacity-10"]').classList.remove('bg-opacity-10');
                    element.querySelector('[class*="bg-opacity-10"]').classList.add('bg-light');
                    
                    const icon = element.querySelector('[class*="text-"]');
                    if (icon) {
                        icon.classList.add('text-muted');
                    }

                    notificationCount--;
                    updateBadge(notificationCount);
                }
            })
            .catch(error => {
                console.error('Error marking notification as read:', error);
            });
        }
    }

    function markAllAsRead() {
        const formData = new FormData();
        formData.append('_token', getCsrfToken());

        fetch('/admin/notifications/read-all', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': getCsrfToken()
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const unreadItems = document.querySelectorAll('.unread-notification');
                unreadItems.forEach(item => {
                    item.classList.remove('unread-notification');
                    const bgElement = item.querySelector('[class*="bg-opacity-10"]');
                    if (bgElement) {
                        bgElement.classList.remove('bg-opacity-10');
                        bgElement.classList.add('bg-light');
                    }
                });

                notificationCount = 0;
                updateBadge(notificationCount);
            }
        })
        .catch(error => {
            console.error('Error marking all as read:', error);
        });
    }

    function updateBadge(count) {
        const badge = document.getElementById('notificationCountBadge');
        if (!badge) return;

        if (count > 0) {
            badge.textContent = count;
            badge.style.display = 'block';
        } else {
            badge.style.display = 'none';
        }

        // Update sidebar badge
        const sidebarBadge = document.getElementById('trial-badge');
        if (sidebarBadge) {
            // Update based on trial class notifications
            loadTrialClassCount();
        }
    }

    function loadTrialClassCount() {
        fetch('/admin/notifications/count', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': getCsrfToken()
            }
        })
        .then(response => response.json())
        .then(data => {
            // Filter for trial class count
            // This would need backend support for type filtering
            updateSidebarBadge(data.count);
        })
        .catch(error => console.error('Error loading trial class count:', error));
    }

    function updateSidebarBadge(count) {
        const sidebarBadge = document.getElementById('trial-badge');
        if (sidebarBadge) {
            if (count > 0) {
                sidebarBadge.textContent = count;
                sidebarBadge.style.display = 'inline-block';
            } else {
                sidebarBadge.style.display = 'none';
            }
        }
    }

    function getCsrfToken() {
        const token = document.querySelector('meta[name="csrf-token"]');
        return token ? token.getAttribute('content') : '';
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

})();
