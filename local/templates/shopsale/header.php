<?use Bitrix\Main\Page\Asset;?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?$APPLICATION->ShowTitle(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1250">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic&subset=latin,cyrillic" rel="stylesheet" type="text/css">

    <? Asset::getInstance()->addCss(CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH."/css/application.css")); ?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.5.1.min.js"); ?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/application.min.js"); ?>

    <?$APPLICATION->ShowHead(); ?>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<div id="panel">
    <?$APPLICATION->ShowPanel() ?>
</div>

<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="main">

    <!--Header-->
    <header id="header" itemscope itemtype="http://schema.org/Organization">
        <div class="wrapper header-top">
            <div class="container">
                <nav>
                    <a href="#" class="button mini">����</a>
                    <a href="#" class="button mini gray">�����������</a>
                </nav>
                <div class="favorites popap-show">
                    <span>��������� (3)</span>
                    <div class="popap-block">
                        <ul class="favorites-popap">
                            <li>
                                <div class="favorites-info">
                                    <div class="favorites-name">
                                        <a href="#">Tabletus sus 64GB</a>
                                    </div>
                                    <div class="favorites-price">
                                        30 000 ���.
                                    </div>
                                </div>
                                <div class="image-block mini" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="#">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/temp/product-1.png" alt="" itemprop="image">
                                    </a>
                                </div>
                                <div class="favorites-cart">
                                    <form action="#" method="post">
                                        <input type="hidden" name="product_id" value="1">
                                        <input type="hidden" name="count" value="1">
                                        <input type="submit" value="��������">
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="favorites-info">
                                    <div class="favorites-name">
                                        <a href="#">Monoblok Full HD 28</a>
                                    </div>
                                    <div class="favorites-price">
                                        30 000 ���.
                                    </div>
                                </div>
                                <div class="image-block mini" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="#">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/temp/product-2.png" alt="" itemprop="image">
                                    </a>
                                </div>
                                <div class="favorites-cart">
                                    <form action="#" method="post">
                                        <input type="hidden" name="product_id" value="1">
                                        <input type="hidden" name="count" value="1">
                                        <input type="submit" value="��������">
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="favorites-info">
                                    <div class="favorites-name">
                                        <a href="#">McBakus 17 500GB</a>
                                    </div>
                                    <div class="favorites-price">
                                        30 000 ���.
                                    </div>
                                </div>
                                <div class="image-block mini" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="#">
                                        <img src="<?SITE_TEMPLATE_PATH?>/temp/product-3.png" alt="" itemprop="image">
                                    </a>
                                </div>
                                <div class="favorites-cart">
                                    <form action="#" method="post">
                                        <input type="hidden" name="product_id" value="1">
                                        <input type="hidden" name="count" value="1">
                                        <input type="submit" value="��������">
                                    </form>
                                </div>
                            </li>
                            <li class="favorites-clear">
                                <form action="#" method="post">
                                    <input type="submit" class="gray small" value="�������� ������">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="user popap-show">
                    <a href="#">�������</a>
                    <div class="popap-block">
                        <form action="#" method="post" class="popap-form">
                            <div class="form-line">
                                <input type="text" placeholder="����� ��� E-mail">
                            </div>
                            <div class="form-line">
                                <input type="password" placeholder="������">
                            </div>
                            <div class="form-line">
                                <label for="check">
                                    <input type="checkbox" name="check" class="gray">
                                    ��������� ����
                                </label>
                            </div>
                            <div class="form-line">
                                <input type="submit" class="button small" value="����">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="info">
                <span class="tel" itemprop="telephone">
                  8 (999) 000 00 00
                </span>
                    <span class="email" itemprop="email">
                  info@shopselle.com
                </span>
                </div>
            </div>
        </div>
        <div class="wrapper header-nav">
            <div class="container">
                <a href="#" class="logo" itemprop="url">
                    <img src="<?SITE_TEMPLATE_PATH?>/images/logo.png" alt="" itemprop="logo">
                    <meta itemprop="name" content="Shopselle">
                    <meta itemprop="address" content="������">
                </a>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "multieval_top",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "childtop",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "multieval_top"
                    ),
                    false
                );?>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:sale.basket.basket.small.mail",
                    "small_basket",
                    Array(
                        "COLUMNS_LIST" => array(0=>"QUANTITY_FORMATED",),
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH_TO_BASKET" => "/personal/basket.php",
                        "PATH_TO_ORDER" => "/personal/order.php",
                        "SHOW_DELAY" => "N",
                        "SHOW_NOTAVAIL" => "N",
                        "SHOW_SUBSCRIBE" => "N",
                        "USER_ID" => ""
                    )
                );?>
                <!--������ ��� active � a-->
                <!--<div class="cart-icon"></div>-->
            </div>
        </div>
        <div class="wrapper nav-block">
            <div class="container">
                <nav itemscope itemtype="http://schema.org/SiteNavigationElement">
                    <ul>
                        <li>
                            <a href="#" itemprop="url">���������</a>
                        </li>
                        <li>
                            <a href="#" itemprop="url">��������</a>
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/menu-top.png" alt="">
                        </li>
                        <li>
                            <a href="#" itemprop="url">��������</a>
                        </li>
                        <li>
                            <a href="#" itemprop="url">��������</a>
                            <img src="<?=SITE_TEMPLATE_PATH?>/temp/menu-new.png" alt="">
                        </li>
                        <li>
                            <a href="#" itemprop="url">�������</a>
                        </li>
                        <li>
                            <a href="#" itemprop="url">����������</a>
                        </li>
                    </ul>
                </nav>

                <form action="#" class="search" method="get">
                    <input type="text" placeholder="�����">
                    <input type="submit" value="�����">
                </form>
            </div>
        </div>
    </header>
    <!--end Header-->

    <!--
  ��� ������� ��������� <div class="wrapper title-block">
  ��� div.content ����������� home
-->
    <div class="content home">

        <!--�������� �������-->
        <main class="container">
