<?php declare(strict_types=1);

namespace App\Controller;

use App\VO\OrderStoreRequest;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/bug')]
class BugController
{
    #[Route(path: '', methods: 'POST')]
    public function show(
        #[MapRequestPayload]
        OrderStoreRequest $request
    ): void {
        dd($request->bookId);
    }
}
