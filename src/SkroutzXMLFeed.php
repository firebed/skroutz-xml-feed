<?php

namespace Firebed\Skroutz;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class SkroutzXMLFeed implements Responsable, Renderable
{
    private array $products = [];

    public function addProduct(SkroutzProduct $product): void
    {
        $this->products[] = $product;
    }

    public function render(): string
    {
        return View::make('skroutz::feed')
            ->with(['products' => $this->products])
            ->render();
    }

    public function toResponse($request): \Illuminate\Http\Response
    {
        return Response::make($this->render(), 200, [
            'Content-Type' => 'text/xml'
        ]);
    }
}