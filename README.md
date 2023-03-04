# Restful Services
Proje PHP dilinde Laravel Framework ile geliştirilmiştir. Api gateway olarak sanctum kullanılmıştır.


## Sistem Gereksinimleri

- PHP >=8.1
- Laravel Installer 4.2.8
- Composer version 2.5.3
- Laravel Framework 10.1.5


## Kurulum

Terminal:
- git clone https://github.com/mehmetyoldakalan/e-commerce-restful-services.git
- cd project-directory
- cp .env.example .env
- .env => QUEUE_CONNECTION=database
- .env => DB_DATABASE=database_name
- .env => DB_USERNAME=USERNAME
- .env => DB_PASSWORD=PASSWORD
- composer install
- php artisan migrate --seed
- php artisan serve
- php artisan queue:work

## Servis Dökümantasyonu

<div class="row">
<h4 style="color:red">** Header : Application/Json</h4>
    <div class="col-md-12">
        <div class="nav-tabs-horizontal nav-tabs-inverse">
            <div class="tab-content padding-20">
            <p>Login: </p>
            <p>url: {host}/api/login  </p>
            <p>method: POST </p>
                <div class="tab-pane " id="team-lead" role="tabpanel">
                    <table class="table hrDataTable table-bordered table-hover table-striped" >
                        <thead>
                             <tr>
                                <th>Parameter</th>
                                <th>Required</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>email</td>
                                <td>Yes</td>
                                <td>String|email</td>
                            </tr>
                            <tr>
                                <td>password</td>
                                <td>Yes</td>
                                <td>String</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-md-12">
        <div class="nav-tabs-horizontal nav-tabs-inverse">
            <div class="tab-content padding-20">
            <p>Product list: </p>
            <p>url: {host}/api/products/  </p>
            <p>Description : Tüm Ürünlerin Listesini Verir</p>
            <p>method: POST </p>
                <div class="tab-pane " id="team-lead" role="tabpanel">
                    <table class="table hrDataTable table-bordered table-hover table-striped" >
                        <thead>
                             <tr>
                                <th>Parameter</th>
                                <th>Required</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Token</td>
                                <td>Yes</td>
                                <td>Bearer</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-md-12">
        <div class="nav-tabs-horizontal nav-tabs-inverse">
            <div class="tab-content padding-20">
            <p>Order : </p>
            <p>url: {host}/api/order/show/{id}  </p>
            <p>description: Sipariş ile ilgili detayları getirir  </p>
            <p>method: POST </p>
                <div class="tab-pane " id="team-lead" role="tabpanel">
                    <table class="table hrDataTable table-bordered table-hover table-striped" >
                        <thead>
                             <tr>
                                <th>Parameter</th>
                                <th>Required</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>id</td>
                                <td>Yes</td>
                                <td>integer</td>
                            </tr>
                             <tr>
                                <td>Token</td>
                                <td>Yes</td>
                                <td>Bearer</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-md-12">
        <div class="nav-tabs-horizontal nav-tabs-inverse">
            <div class="tab-content padding-20">
            <p>Order Store : </p>
            <p>url: {host}/api/order/store  </p>
            <p>description: Sipariş Oluşturma  </p>
            <p>method: POST </p>
                <div class="tab-pane " id="team-lead" role="tabpanel">
                    <table class="table hrDataTable table-bordered table-hover table-striped" >
                        <thead>
                             <tr>
                                <th>Parameter</th>
                                <th>Required</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>products[PRODUCT_ID]:PRODUCT_COUNT</td>
                                <td>Yes</td>
                                <td>integer</td>
                            </tr>
                            <tr>
                                <td>user_id</td>
                                <td>Yes</td>
                                <td>integer</td>
                            </tr>
                             <tr>
                                <td>Token</td>
                                <td>Yes</td>
                                <td>Bearer</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-md-12">
            <div class="nav-tabs-horizontal nav-tabs-inverse">
                <div class="tab-content padding-20">
                <p>Offer Rules : </p>
                <p>url: {host}/api/offer/rules  </p>
                <p>description: Kampanya Oluşturma Kurallarını Verir </p>
                <p>method: POST </p>
                    <div class="tab-pane " id="team-lead" role="tabpanel">
                        <table class="table hrDataTable table-bordered table-hover table-striped" >
                            <thead>
                                 <tr>
                                    <th>Parameter</th>
                                    <th>Required</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                    <td>Token</td>
                                    <td>Yes</td>
                                    <td>Bearer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <br>
    <div class="col-md-12">
            <div class="nav-tabs-horizontal nav-tabs-inverse">
                <div class="tab-content padding-20">
                <p>Offer Store : </p>
                <p>url: {host}/api/offer/rules  </p>
                <p>description: Kampanya Oluşturma </p>
                <p>method: POST </p>
                    <div class="tab-pane " id="team-lead" role="tabpanel">
                        <table class="table hrDataTable table-bordered table-hover table-striped" >
                            <thead>
                                 <tr>
                                    <th>Parameter</th>
                                    <th>Required</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                    <td>title</td>
                                    <td>Yes</td>
                                    <td>string</td>
                                </tr>
                                 <tr>
                                    <td>description</td>
                                    <td>Yes</td>
                                    <td>string</td>
                                </tr>
                                 <tr>
                                    <td>code</td>
                                    <td>Yes</td>
                                    <td>string</td>
                                </tr>
                                 <tr>
                                    <td>category_id</td>
                                    <td>No</td>
                                    <td>integer</td>
                                </tr>
                                 <tr>
                                    <td>author_id</td>
                                    <td>No</td>
                                    <td>integer</td>
                                </tr>
                                 <tr>
                                    <td>is_native</td>
                                    <td>No</td>
                                    <td>enum("native","foreign")</td>
                                </tr>
                                 <tr>
                                    <td>discount_percentage</td>
                                    <td>No</td>
                                    <td>double</td>
                                </tr>
                                 <tr>
                                    <td>min_product_count</td>
                                    <td>No</td>
                                    <td>integer</td>
                                </tr>
                                 <tr>
                                    <td>free_product_for_min_product_count</td>
                                    <td>No</td>
                                    <td>integer</td>
                                </tr>
                                 <tr>
                                    <td>min_order_amount</td>
                                    <td>No</td>
                                    <td>double</td>
                                </tr>
                                 <tr>
                                    <td>discount_percentage</td>
                                    <td>No</td>
                                    <td>double</td>
                                </tr>
                                 <tr>
                                    <td>Token</td>
                                    <td>Yes</td>
                                    <td>Bearer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
