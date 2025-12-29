<?php

namespace App\Helpers;

class TimezoneHelper
{
    /**
     * Get timezone based on country
     */
    public static function getTimezoneFromCountry($country)
    {
        if (!$country) {
            return config('app.timezone', 'UTC');
        }

        $countryToTimezone = [
            'United States of America' => 'America/New_York',
            'USA' => 'America/New_York',
            'United Kingdom' => 'Europe/London',
            'UK' => 'Europe/London',
            'Canada' => 'America/Toronto',
            'Australia' => 'Australia/Sydney',
            'New Zealand' => 'Pacific/Auckland',
            'India' => 'Asia/Kolkata',
            'Pakistan' => 'Asia/Karachi',
            'Saudi Arabia' => 'Asia/Riyadh',
            'United Arab Emirates' => 'Asia/Dubai',
            'UAE' => 'Asia/Dubai',
            'Japan' => 'Asia/Tokyo',
            'China' => 'Asia/Shanghai',
            'Germany' => 'Europe/Berlin',
            'France' => 'Europe/Paris',
            'Italy' => 'Europe/Rome',
            'Spain' => 'Europe/Madrid',
            'Netherlands' => 'Europe/Amsterdam',
            'Belgium' => 'Europe/Brussels',
            'Switzerland' => 'Europe/Zurich',
            'Sweden' => 'Europe/Stockholm',
            'Norway' => 'Europe/Oslo',
            'Denmark' => 'Europe/Copenhagen',
            'Brazil' => 'America/Sao_Paulo',
            'Mexico' => 'America/Mexico_City',
            'Argentina' => 'America/Argentina/Buenos_Aires',
            'South Africa' => 'Africa/Johannesburg',
            'Egypt' => 'Africa/Cairo',
            'Turkey' => 'Europe/Istanbul',
            'Russia' => 'Europe/Moscow',
            'Singapore' => 'Asia/Singapore',
            'Malaysia' => 'Asia/Kuala_Lumpur',
            'Thailand' => 'Asia/Bangkok',
            'Indonesia' => 'Asia/Jakarta',
            'Philippines' => 'Asia/Manila',
            'South Korea' => 'Asia/Seoul',
            'Bangladesh' => 'Asia/Dhaka',
            'Sri Lanka' => 'Asia/Colombo',
            'Nepal' => 'Asia/Kathmandu',
            'Afghanistan' => 'Asia/Kabul',
            'Iran' => 'Asia/Tehran',
            'Iraq' => 'Asia/Baghdad',
            'Israel' => 'Asia/Jerusalem',
            'Kuwait' => 'Asia/Kuwait',
            'Qatar' => 'Asia/Qatar',
            'Oman' => 'Asia/Muscat',
            'Bahrain' => 'Asia/Bahrain',
            'Jordan' => 'Asia/Amman',
            'Lebanon' => 'Asia/Beirut',
            'Greece' => 'Europe/Athens',
            'Portugal' => 'Europe/Lisbon',
            'Ireland' => 'Europe/Dublin',
            'Poland' => 'Europe/Warsaw',
            'Czechia' => 'Europe/Prague',
            'Austria' => 'Europe/Vienna',
            'Finland' => 'Europe/Helsinki',
            'Romania' => 'Europe/Bucharest',
            'Hungary' => 'Europe/Budapest',
            'Croatia' => 'Europe/Zagreb',
            'Ukraine' => 'Europe/Kiev',
        ];

        return $countryToTimezone[$country] ?? config('app.timezone', 'UTC');
    }

    /**
     * Convert datetime to student's timezone
     */
    public static function convertToStudentTimezone($datetime, $studentCountry)
    {
        if (!$datetime) {
            return null;
        }

        $timezone = self::getTimezoneFromCountry($studentCountry);
        
        if ($datetime instanceof \Carbon\Carbon) {
            return $datetime->setTimezone($timezone);
        }

        return \Carbon\Carbon::parse($datetime)->setTimezone($timezone);
    }

    /**
     * Format datetime for display in student's timezone
     */
    public static function formatForStudent($datetime, $studentCountry, $format = 'M d, Y h:i A')
    {
        $converted = self::convertToStudentTimezone($datetime, $studentCountry);
        return $converted ? $converted->format($format) : 'N/A';
    }

    /**
     * Format time for display in student's timezone (combines date and time)
     * Assumes the stored time is in Asia/Karachi timezone (server timezone)
     */
    public static function formatTimeForStudent($date, $time, $studentCountry, $format = 'h:i A')
    {
        if (!$date || !$time) {
            return 'N/A';
        }

        $timezone = self::getTimezoneFromCountry($studentCountry);
        
        // Get the time string
        $timeString = null;
        if (is_string($time)) {
            $timeString = $time;
            // Extract just the time part if it's a datetime string
            if (strpos($timeString, ' ') !== false) {
                $timeString = explode(' ', $timeString)[1];
            }
            // Remove seconds if present
            $timeParts = explode(':', $timeString);
            $timeString = $timeParts[0] . ':' . ($timeParts[1] ?? '00');
        } elseif ($time instanceof \Carbon\Carbon) {
            $timeString = $time->format('H:i');
        } elseif (is_object($time) && method_exists($time, 'format')) {
            $timeString = $time->format('H:i');
        } else {
            return 'N/A';
        }
        
        // Combine date and time, assuming the stored time is in Asia/Karachi timezone
        $dateTimeString = $date->format('Y-m-d') . ' ' . $timeString;
        
        // Parse as Asia/Karachi timezone (where the time is stored)
        $datetime = \Carbon\Carbon::parse($dateTimeString, 'Asia/Karachi');
        
        // Convert to student's timezone
        $converted = $datetime->setTimezone($timezone);
        return $converted->format($format);
    }
}

