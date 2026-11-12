<?php

namespace App\Helpers;

class SiteLinks
{
    public static function resolve(string $routeName): ?array
    {
        $courses = config('site_links.courses', []);
        $utility = config('site_links.utility', []);

        if (isset($courses[$routeName])) {
            return [
                'route' => $routeName,
                'label' => $courses[$routeName]['label'],
                'desc' => $courses[$routeName]['desc'] ?? null,
                'url' => route($routeName),
                'type' => 'course',
            ];
        }

        if (isset($utility[$routeName])) {
            return [
                'route' => $routeName,
                'label' => $utility[$routeName],
                'desc' => null,
                'url' => route($routeName),
                'type' => 'utility',
            ];
        }

        if ($routeName === 'home.index') {
            return [
                'route' => $routeName,
                'label' => 'Home',
                'desc' => null,
                'url' => route($routeName),
                'type' => 'utility',
            ];
        }

        return null;
    }

    /**
     * Related internal links for a page (excludes the current route).
     *
     * @return array<int, array{route:string,label:string,desc:?string,url:string,type:string}>
     */
    public static function related(?string $forRoute = null): array
    {
        $forRoute = $forRoute ?: (optional(request()->route())->getName() ?: 'home.index');
        $keys = config('site_links.related.' . $forRoute, []);

        $links = [];
        foreach ($keys as $key) {
            if ($key === $forRoute) {
                continue;
            }
            $item = self::resolve($key);
            if ($item) {
                $links[] = $item;
            }
        }

        return $links;
    }

    /**
     * @return array<int, array{route:string,label:string,desc:?string,url:string,type:string}>
     */
    public static function allCourses(): array
    {
        $links = [];
        foreach (array_keys(config('site_links.courses', [])) as $key) {
            $item = self::resolve($key);
            if ($item) {
                $links[] = $item;
            }
        }

        return $links;
    }

    /**
     * @return array<int, array{route:string,label:string,desc:?string,url:string,type:string}>
     */
    public static function footerQuickLinks(): array
    {
        $keys = [
            'home.about',
            'teachers',
            'home.pricing',
            'home.faq',
            'home.contact.us',
            'blogs.index',
            'home.video',
            'kids.classes',
        ];

        $links = [];
        foreach ($keys as $key) {
            $item = self::resolve($key);
            if ($item) {
                $links[] = $item;
            }
        }

        return $links;
    }
}
