/**
 * Student Notification System
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
        fetch('/student/notifications/count', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            credentials: 'same-origin'
        })
        .then(response => response.json())
        .then(data => {
            notificationCount = data.count || 0;
            updateBadge();
        })
        .catch(error => {
            console.error('Error loading notification count:', error);
        });
    }

    function updateBadge() {
        const badge = document.getElementById('notificationCountBadge');
        if (badge) {
            if (notificationCount > 0) {
                badge.textContent = notificationCount > 99 ? '99+' : notificationCount;
                badge.style.display = 'flex';
                badge.style.alignItems = 'center';
                badge.style.justifyContent = 'center';
            } else {
                badge.style.display = 'none';
            }
        }
    }

    function loadNotifications() {
        const listContainer = document.getElementById('notificationsList');
        if (!listContainer) return;

        listContainer.innerHTML = '<div class="text-center py-4"><div class="spinner-border spinner-border-sm text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';

        fetch('/student/notifications/list', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            credentials: 'same-origin'
        })
        .then(response => response.json())
        .then(data => {
            displayNotifications(data);
        })
        .catch(error => {
            console.error('Error loading notifications:', error);
            listContainer.innerHTML = '<div class="text-center py-4 text-muted">Error loading notifications</div>';
        });
    }

    function displayNotifications(notifications) {
        const listContainer = document.getElementById('notificationsList');
        if (!listContainer) return;

        if (notifications.length === 0) {
            listContainer.innerHTML = '<div class="text-center py-4 text-muted"><i class="ti ti-bell-off fs-4 mb-2 d-block"></i>No notifications</div>';
            return;
        }

        let html = '';
        notifications.forEach(notification => {
            const readClass = notification.read ? 'opacity-75' : '';
            const colorClass = `text-${notification.color || 'primary'}`;
            const icon = notification.icon || 'ti ti-bell';
            
            html += `
                <a href="javascript:void(0)" class="d-flex align-items-center gap-3 p-3 hover-bg-light rounded text-decoration-none text-dark notification-item ${readClass}" data-id="${notification.id}" data-read="${notification.read}">
                    <div class="avatar-xs bg-${notification.color || 'primary'}-subtle ${colorClass} rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <iconify-icon icon="${icon}" class="fs-5"></iconify-icon>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="mb-1 fw-semibold" style="font-size: 0.875rem;">${escapeHtml(notification.title)}</h6>
                        <p class="mb-0 text-muted" style="font-size: 0.75rem; line-height: 1.4;">${escapeHtml(notification.message)}</p>
                        <small class="text-muted" style="font-size: 0.7rem;">${notification.time_ago}</small>
                    </div>
                    ${!notification.read ? '<span class="badge bg-primary rounded-pill" style="width: 8px; height: 8px;"></span>' : ''}
                </a>
            `;
        });

        listContainer.innerHTML = html;

        // Add click handlers
        document.querySelectorAll('.notification-item').forEach(item => {
            item.addEventListener('click', function() {
                const notificationId = this.getAttribute('data-id');
                const isRead = this.getAttribute('data-read') === 'true';
                
                if (!isRead) {
                    markAsRead(notificationId);
                }
            });
        });
    }

    function markAsRead(id) {
        fetch(`/student/notifications/${id}/read`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
            },
            credentials: 'same-origin'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                loadCount();
                loadNotifications();
            }
        })
        .catch(error => {
            console.error('Error marking notification as read:', error);
        });
    }

    function markAllAsRead() {
        fetch('/student/notifications/mark-all-read', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
            },
            credentials: 'same-origin'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                loadCount();
                loadNotifications();
            }
        })
        .catch(error => {
            console.error('Error marking all as read:', error);
        });
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
})();

