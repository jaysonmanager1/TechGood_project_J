@extends('dashboard')
<link rel="stylesheet" href="{{ asset('./front-end/css/productdetail-style.css') }}">
@section('content_detail')
    <div class="breadcrumb">
        <p>Tất cả sản phẩm</p>
    </div>
    <section class="box-details">
        <form action="#" class="form-details">
            <div class="img-details">
                <div class="box-imgs">
                    <div class="imgs-left">
                        <div class="img-small">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                alt="" width="100" height="100">
                        </div>
                        <div class="img-small">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                alt="" width="100" height="100">
                        </div>
                        <div class="img-small">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                alt="" width="100" height="100">
                        </div>

                        <div class="img-small">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                alt="" width="100" height="100">
                        </div>
                        <div class="img-small">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                alt="" width="100" height="100">
                        </div>
                    </div>
                    <div class="imgs-right">
                        <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                            alt="" width="500" height="508">
                    </div>
                </div>
            </div>
            <div class="text-details">
                <div class="name-product">
                    Tên sản phẩm
                </div>
                <div class="description-product">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, nihil ipsa!
                    Fuga quia dolorem omnis dolorum? Exercitationem eum autem voluptatum possimus accusantium aliquid quam
                    est doloremque officia, perspiciatis hic reprehenderit aliquam odit, corporis, quae repellat soluta
                    maxime expedita quod? Optio, maxime perferendis iusto sit ab error doloribus commodi sed suscipit!</div>
                <div class="color-product">
                    <p>Màu:</p>
                    <label for="color" class="color"></label>
                    <input type="radio" name="color" id="color">

                    <label for="color" class="color"></label>
                    <input type="radio" name="color" id="color">

                    <label for="color" class="color"></label>
                    <input type="radio" name="color" id="color">
                </div>
                <div class="type-product">
                    <p>Kiểu máy:</p>
                    <select name="type-model" id="type-model">
                        <option value="model">Kiểu máy 1</option>
                        <option value="model">Kiểu máy 2</option>
                        <option value="model">Kiểu máy 3</option>
                    </select>
                </div>
                <div class="quantity-product">
                    <p>Số lượng:</p>
                    <div class="box-number">
                        <div class="minus">-</div>
                        <div class="numbers">1</div>
                        <div class="plus">+</div>
                    </div>
                </div>
                <div class="addtocard">
                    <button type="submit" class="d-btn-addtocart">Thêm vào giỏ</button>
                </div>
            </div>
        </form>

        <div class="info-detail">
            <div class="thong-so">
                <h3>Thông số kỹ thuật</h3>
                <div class="box-thongso">
                    <ul class="technical-content">
                        <li class="item-content">
                            <p class="items">Thong so co ten dai lam ne</p>
                            <div class="info-tech">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                quisquam molestiae
                                commodi tempora tenetur agendi doloribus.</div>
                        </li>
                        <li class="item-content">
                            <p class="items">ngan ne</p>
                            <div class="info-tech">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                quisquam molestiae
                                commodi tempora tenetur agendi doloribus.</div>
                        </li>
                        <li class="item-content">
                            <p class="items">Thong so co ten dai vai cut lam ne</p>
                            <div class="info-tech">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
                                quisquam molestiae
                                commodi tempora tenetur agendi doloribus.</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="same-products">
                <h3>Sản phẩm tương tự</h3>
                <div class="box-product">
                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Tên sản phẩm này rất dài đó nha</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>

                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Blanditiis harum velit dolor cum assumenda sunt?</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>

                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Tên sản phẩm này rất dài đó nha</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>

                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Tên sản phẩm này rất dài đó nha</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>

                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Tên sản phẩm này rất dài đó nha</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>

                    <form action="#">
                        <div class="card-product">
                            <img src="https://th.bing.com/th/id/R.595fa4992c11870894827e96ef8a7100?rik=SGGWJ5QllDFfIg&pid=ImgRaw&r=0"
                                class="img-product" alt="...">
                            <div class="s-info-product">
                                <a href="#" class="s-link-name">
                                    <div class="s-name-product">Tên sản phẩm này rất dài đó nha</div>
                                </a>
                                <div class="s-box-price">
                                    <span class="price-old">20.000.000 đ</span>
                                    <span class="price-new">15.000.000 đ</span>
                                </div>
                            </div>
                            <button type="submit" class="btn-addtocart">Thêm vào giỏ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
