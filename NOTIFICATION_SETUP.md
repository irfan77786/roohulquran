# Notification System Setup Guide

## What Has Been Implemented

✅ Complete notification system with the following features:
- Real-time notification badge that shows/hides based on unread count
- Click notification to mark as read (count decreases)
- "Mark all as read" functionality
- Auto-refresh every 30 seconds
- Sidebar badge for trial class notifications
- Notifications created automatically when:
  - New trial class is registered
  - New blog is published

## Files Created

1. **Database Migration**: `database/migrations/2025_01_20_000000_create_admin_notifications_table.php`
2. **Model**: `app/Models/AdminNotification.php`
3. **Controller**: `app/Http/Controllers/Admin/NotificationController.php`
4. **JavaScript**: `public/admin/assets/js/notifications.js`
5. **Routes**: Added to `routes/web.php` (lines 39-44)

## Setup Instructions

### Step 1: Configure Database

Make sure your `.env` file has the correct database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rh
DB_USERNAME=root
DB_PASSWORD=your_password
```

### Step 2: Start MySQL Server

```bash
# macOS
brew services start mysql

# Linux
sudo systemctl start mysql

# Windows
# Start MySQL service from Services panel
```

### Step 3: Run Migrations

```bash
php artisan migrate
```

This will create the `admin_notifications` table.

### Step 4: Test the System

1. **Open the admin dashboard** in your browser
2. **Open browser console** (F12) to check for any JavaScript errors
3. **Check if notification badge appears** in the header
4. **Click the bell icon** to see the notification dropdown
5. **Submit a trial class form** on your frontend to trigger a notification

## How It Works

### 1. Badge Display
- The badge shows unread notification count
- Badge hides when count is 0
- Updates every 30 seconds automatically

### 2. Notification Dropdown
- Opens when clicking the bell icon
- Loads notifications via AJAX from `/admin/notifications`
- Shows loading spinner while fetching

### 3. Mark as Read
- Click any unread notification to mark it as read
- Badge count decreases immediately
- Visual state changes (becomes grayed out)

### 4. Mark All as Read
- Click "Mark all as read" link in notification header
- All notifications become read
- Badge count goes to 0

### 5. Sidebar Badge
- Shows count of unread trial class notifications
- Updates in real-time
- Can click sidebar item to view all trial classes

## API Endpoints

- `GET /admin/notifications` - Get all notifications (latest 10)
- `GET /admin/notifications/count` - Get unread notification count
- `POST /admin/notifications/{id}/read` - Mark notification as read
- `POST /admin/notifications/read-all` - Mark all as read
- `DELETE /admin/notifications/{id}` - Delete notification

## Troubleshooting

### Badge Not Showing
1. Check browser console for JavaScript errors
2. Verify `/admin/assets/js/notifications.js` is accessible
3. Check network tab for failed AJAX requests

### Notifications Not Loading
1. Verify routes are registered: `php artisan route:list --path=admin/notifications`
2. Check database connection in `.env`
3. Verify migrations have run: `php artisan migrate:status`

### Database Errors
1. Ensure MySQL server is running
2. Check database credentials in `.env`
3. Create database if it doesn't exist: `CREATE DATABASE rh;`

## Testing Without Database

If you want to test the UI before setting up the database, you can:

1. Temporarily mock the responses in the JavaScript
2. Use `php artisan tinker` to create test notifications after migrations run

## Next Steps

After database is configured:

1. Run migrations: `php artisan migrate`
2. Clear cache: `php artisan config:clear`
3. Test by submitting a trial class form
4. Check admin dashboard for the notification

## Customization

### Change Auto-Refresh Interval
Edit `public/admin/assets/js/notifications.js`, line 96:
```javascript
setInterval(loadCount, 30000); // 30 seconds - change to your preference
```

### Add More Notification Types
1. Add to `admin_notifications` table
2. Update NotificationController
3. Create notification using:
```php
AdminNotification::createNotification(
    'type',
    'Title',
    'Message',
    'icon-class',
    'color',
    ['data' => 'value'],
    'notifiable_type',
    'notifiable_id'
);
```

## Support

If you encounter issues:
1. Check Laravel logs: `storage/logs/laravel.log`
2. Check browser console for JavaScript errors
3. Verify all files are in the correct locations
4. Run `php artisan route:clear` and `php artisan config:clear`
