<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;

class ProductController extends Controller
{
    /**
     * Shows authenticated user information
     * This endpoint allows you to add a word to the list. It's a really useful endpoint,
     * and you should play around with it for a bit.
     * <aside class="notice">We mean it; you really should.😕</aside>
     *
     *
     * @response 200
     * {
     *   "id": 25,
     *   "nome": "Seda Super Condicionador  - Hidratação",
     *   "marca": {
     *   "nombre": "Seda"
     *    },
     *   "reviews": [
     *       {
     *           "user_name": "Isabela",
     *           "user_email": "contato@bernardomota.com",
     *           "coments": "Adoro Muito bom para hidratar",
     *           "general_rating": "5",
     *           "presentacion": "5",
     *           "aroma": "5",
     *           "textura": "5",
     *           "durabilidad": "5",
     *           "fac_uso": "5",
     *          "eficacia": "5",
     *           "compraria": "5",
     *           "calidad_precio": "5",
     *           "sustentabilidad": null,
     *           "user_registered": null,
     *           "profile": null,
     *           "image": null,
     *           "product_name": "Seda Super Condicionador  - Hidratação"
     *       },
     *       {
     *           "user_name": "Claudia",
     *           "user_email": "contato@bernardomota.com",
     *           "coments": "Deixa o cabelo super sedoso\r\nVale a pena! \r\nJá usei todos.",
     *          "general_rating": "5",
     *           "presentacion": "5",
     *           "aroma": "5",
     *           "textura": "5",
     *           "durabilidad": "5",
     *           "fac_uso": "5",
     *           "eficacia": "5",
     *           "compraria": "5",
     *           "calidad_precio": "5",
     *           "sustentabilidad": null,
     *           "user_registered": null,
     *           "profile": null,
     *           "image": null,
     *           "product_name": "Seda Super Condicionador  - Hidratação"
     *       },
     *     ]
     * }
     * @response status=400 scenario="Unauthenticated" {
     *     "message": "Unauthenticated."
     * }
     *
     *
     *
     */
    public function index()
    {
        $productList = new ProductCollection(Product::where([
            ['status', 'Publicado'],
            ['count_total_reviews', 445566]
        ])->with('brand', 'reviews')->get());

        return response()->json($productList);
    }
}
