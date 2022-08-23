@extends('site.common.template')

@section('content')
    <div class="container">
        <div class="api">
            <div class="api__items">
                <div class="api__item">
                    <div class="api__item-request post">
                        POST
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/register
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            BODY formdata
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">name</div>
                                <div class="api__params-example">Роман</div>
                            </div>
                            <div class="api__params-item">
                                <div class="api__params-name">email</div>
                                <div class="api__params-example">sectorrbs@gmail.com</div>
                            </div>
                            <div class="api__params-item">
                                <div class="api__params-name">password</div>
                                <div class="api__params-example">12345678</div>
                            </div>
                            <div class="api__params-item">
                                <div class="api__params-name">password_confirmation</div>
                                <div class="api__params-example">12345678</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request post">
                        POST
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/login
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Accept</div>
                                <div class="api__params-example">application/json</div>
                            </div>
                            <div class="api__params-item">
                                <div class="api__params-name">X-XSRF-TOKEN</div>
                                <div class="api__params-example">
                                    eyJpdiI6InQrNU0ySTNGa3FHZEwyYTUwYWZvZHc9PSIsInZhbHVlIjoiWHJoQzVDNUl5ZWRPWUJhU2l2bjJOTWNhVG1JTmhhajdqaTJTc0VlUjNrckIxdzZUaFFQWjZ4dXA0a2cxWlE5Mk5jbjJaa0drVXM1UzZTQy9Fby9FL0NXVDhqb1RiWW1WT0NJRjY0OXlFdDdZcUp0Nk84MENCbHFoUFE0YUlRd2wiLCJtYWMiOiJlMDlkYTc5NGU1ZTI5YTU3MmE5ZWY5MGUyNmRlY2FkYjdlZWI5Y2JiY2E2NzJhNTNmMTllOTFlN2JhY2Q1YjcxIiwidGFnIjoiIn0
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            BODY formdata
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">email</div>
                                <div class="api__params-example">sectorrbs@gmail.com</div>
                            </div>
                            <div class="api__params-item">
                                <div class="api__params-name">password</div>
                                <div class="api__params-example">12345678</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request get">
                        GET
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/categories
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request get">
                        GET
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/categories/{category}/products
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request post">
                        POST
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/categories/create
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            BODY
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">title</div>
                                <div class="api__params-example">Название новой категории</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request post">
                        POST
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/categories/{category_id}/update
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            BODY
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">title</div>
                                <div class="api__params-example">Новое название категории</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request delete">
                        DELETE
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/categories/{category_id}/delete
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request get">
                        GET
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/products
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request post">
                        POST
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/products/create
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            BODY
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">title</div>
                                <div class="api__params-example">Название нового продукта</div>
                            </div>
                            <div class="api__params-item">
                                <div class="api__params-name">price</div>
                                <div class="api__params-example">Стоимость нового проекта</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request post">
                        POST
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/products/{product_id}/update
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            BODY
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">title</div>
                                <div class="api__params-example">Новое название продукта</div>
                            </div>
                            <div class="api__params-item">
                                <div class="api__params-name">price</div>
                                <div class="api__params-example">Новая стоимость продукта</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request post">
                        POST
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/products/{id_product}/add_category
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            BODY
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">category_id</div>
                                <div class="api__params-example">1</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request delete">
                        DELETE
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/products/{id_product}/delete_category
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            BODY
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">category_id</div>
                                <div class="api__params-example">2</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="api__item">
                    <div class="api__item-request delete">
                        DELETE
                    </div>
                    <div class="api__item-field">
                        <strong>{domain}</strong>/api/v1/products/{product_id}/delete
                    </div>
                    <div class="api__item-params api__params">
                        <div class="api__params-body">
                            HEADERS
                        </div>
                        <div class="api__params-items">
                            <div class="api__params-item">
                                <div class="api__params-name">Referer</div>
                                <div class="api__params-example">localhost:3000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


