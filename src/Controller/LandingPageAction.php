<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LandingPageAction
{
    public function __invoke(Request $request): Response
    {
        dd($request, file_get_contents(__DIR__ . '/../../var/cache/dev/url_matching_routes.php'));
    }
}
