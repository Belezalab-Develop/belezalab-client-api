# Endpoints


## Shows authenticated user information
This endpoint allows you to add a word to the list. It&#039;s a really useful endpoint,
and you should play around with it for a bit.


<aside class="notice">We mean it; you really should.😕</aside>

> Example request:

```bash
curl -X GET \
    -G "http://belezalab-client-api.test/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://belezalab-client-api.test/api/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://belezalab-client-api.test/api/products',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json

{
  "id": 25,
  "nome": "Seda Super Condicionador  - Hidratação",
  "marca": {
  "nombre": "Seda"
   },
  "reviews": [
      {
          "user_name": "Isabela",
          "user_email": "contato@bernardomota.com",
          "coments": "Adoro Muito bom para hidratar",
          "general_rating": "5",
          "presentacion": "5",
          "aroma": "5",
          "textura": "5",
          "durabilidad": "5",
          "fac_uso": "5",
         "eficacia": "5",
          "compraria": "5",
          "calidad_precio": "5",
          "sustentabilidad": null,
          "user_registered": null,
          "profile": null,
          "image": null,
          "product_name": "Seda Super Condicionador  - Hidratação"
      },
      {
          "user_name": "Claudia",
          "user_email": "contato@bernardomota.com",
          "coments": "Deixa o cabelo super sedoso\r\nVale a pena! \r\nJá usei todos.",
         "general_rating": "5",
          "presentacion": "5",
          "aroma": "5",
          "textura": "5",
          "durabilidad": "5",
          "fac_uso": "5",
          "eficacia": "5",
          "compraria": "5",
          "calidad_precio": "5",
          "sustentabilidad": null,
          "user_registered": null,
          "profile": null,
          "image": null,
          "product_name": "Seda Super Condicionador  - Hidratação"
      },
    ]
}
```
> Example response (400, Unauthenticated):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-products"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"></code></pre>
</div>
<div id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products"></code></pre>
</div>
<form id="form-GETapi-products" data-method="GET" data-path="api/products" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-products" onclick="tryItOut('GETapi-products');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-products" onclick="cancelTryOut('GETapi-products');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-products" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/products</code></b>
</p>
</form>



