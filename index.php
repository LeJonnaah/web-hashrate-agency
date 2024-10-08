<!DOCTYPE html>

<?php
$lang = "es";
?>

<html lang="es">

<head>
    <!-- Metadata -->
    <title>HASHRATE AGENCY</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <meta name="title" content="HASHRATE STUDIOS" />
    <meta name="description" content="HRDescription" />
    <meta property="og:title" content="HASHRATE STUDIOS">
    <meta property="og:description" content="HRDescription">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="HASHRATE STUDIOS">
    <meta name="twitter:description" content="HRDescription">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" type="image/svg" href="favicon.svg">

    <!-- hCaptcha -->
    <script src="https://hcaptcha.com/1/api.js?hl=<?php echo $lang; ?>" async defer></script>


    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">



    <!-- No JS? -->
    <noscript>
        <meta http-equiv="refresh" content="0; url=https://duckduckgo.com/" />
    </noscript>
</head>


<body class="main-body">
    <?php
    require('./assets/backend/user-feedback.php');
    require('./assets/backend/settings-handler.php');
    ?>

    <h1>Hashrate</h1>

    <!-- Contact us mobile button -->
    <a href="https://wa.me/573332440167" target="_blank" class="contact-mobile">
        <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_25_1839)">
                <path
                    d="M28.5948 8.84722C27.9138 7.3516 27.0175 6.00607 25.9131 4.80819C24.7381 3.53364 23.3952 2.48682 21.8745 1.68409C20.6184 1.02106 19.2976 0.551868 17.9106 0.27885C17.1357 0.12633 16.3547 0.0366578 15.5662 0.00881225C14.7158 -0.0212173 13.8701 0.0259675 13.0272 0.143238C11.496 0.356281 10.034 0.807798 8.64058 1.49235C7.54432 2.0309 6.52754 2.69871 5.58919 3.49353C4.67977 4.26384 3.86761 5.12988 3.15573 6.09471C2.16433 7.43838 1.40727 8.90995 0.886646 10.5102C0.606525 11.3711 0.404118 12.2509 0.276726 13.1487C0.17886 13.8385 0.12952 14.5321 0.123198 15.2295C0.11543 16.0868 0.174732 16.9386 0.305561 17.7848C0.487671 18.9628 0.797727 20.1042 1.23894 21.2078C1.48174 21.8152 1.75985 22.4046 2.07675 22.9745C2.1048 23.025 2.10843 23.0685 2.09368 23.1238C1.52899 25.2418 0.965791 27.3602 0.402312 29.4785C0.274856 29.9577 0.147055 30.4368 0.0195632 30.9159C0.013277 30.9395 0.00842937 30.9636 0 31C0.0489729 30.9887 0.088725 30.9808 0.127787 30.9703C2.07224 30.4451 4.01663 29.9196 5.96106 29.3943C6.5847 29.2258 7.20866 29.0585 7.83191 28.8886C7.89059 28.8726 7.93813 28.8783 7.99175 28.908C9.10708 29.5265 10.281 29.989 11.5119 30.2978C12.1966 30.4695 12.889 30.6002 13.5917 30.659C14.0605 30.6982 14.5313 30.7303 15.0014 30.7344C16.5283 30.7477 18.0224 30.518 19.4805 30.0502C21.4287 29.4251 23.1799 28.4303 24.7333 27.0694C26.1687 25.8118 27.3345 24.3284 28.2274 22.6203C28.9266 21.2829 29.4223 19.8692 29.7096 18.3788C29.8659 17.5679 29.9622 16.7502 29.9878 15.9238C29.9884 15.9046 29.9958 15.8856 30 15.8664V14.867C29.9919 14.7519 29.9821 14.6369 29.9759 14.5217C29.8685 12.5393 29.414 10.6462 28.5948 8.84722ZM26.8532 19.3648C26.4162 20.7283 25.7715 21.9804 24.9218 23.1195C23.806 24.6154 22.4375 25.8054 20.816 26.6857C19.6927 27.2956 18.5044 27.7137 17.2547 27.9451C16.6554 28.0561 16.0509 28.1184 15.4415 28.1374C13.7315 28.1907 12.082 27.8918 10.4908 27.2492C9.83874 26.9859 9.21554 26.6618 8.61544 26.2904C8.52085 26.2318 8.42742 26.171 8.33035 26.1172C8.30169 26.1013 8.25943 26.0942 8.22835 26.1025C6.75997 26.4969 5.29216 26.8935 3.82424 27.2897C3.74911 27.31 3.67367 27.3289 3.58401 27.3522C3.72554 26.8201 3.86257 26.3046 3.9998 25.7891C4.27301 24.7628 4.54591 23.7364 4.8207 22.7105C4.83546 22.6554 4.8207 22.6163 4.7946 22.5708C4.53152 22.1127 4.25743 21.6607 4.01184 21.1928C3.66855 20.5389 3.40766 19.8475 3.19511 19.1371C2.94981 18.3173 2.78728 17.4806 2.70465 16.6271C2.58422 15.3834 2.63986 14.1479 2.87207 12.9215C3.07941 11.8265 3.42264 10.7777 3.89915 9.77502C4.4407 8.6355 5.13227 7.60161 5.97253 6.67451C7.08106 5.45142 8.37134 4.48266 9.84651 3.777C10.7669 3.33672 11.7256 3.01799 12.7229 2.82238C13.4475 2.68026 14.1782 2.60471 14.9161 2.59573C16.2766 2.57918 17.6045 2.78299 18.8988 3.21342C20.0287 3.58917 21.0834 4.12377 22.0623 4.81553C23.2921 5.68456 24.3382 6.74591 25.2025 7.99645C25.9268 9.04457 26.4815 10.1808 26.8687 11.4036C27.0971 12.1249 27.2606 12.8617 27.3599 13.613C27.429 14.1357 27.4657 14.6611 27.4734 15.1891C27.4942 16.6172 27.2875 18.0092 26.8532 19.3648Z"
                    fill="white" />
                <path
                    d="M22.2389 18.7658C21.9006 18.5934 21.5634 18.4184 21.223 18.2502C20.6396 17.9618 20.0556 17.6746 19.4683 17.3946C19.3271 17.3273 19.1745 17.2811 19.0231 17.2421C18.8618 17.2005 18.7168 17.2516 18.6001 17.3751C18.5609 17.4165 18.527 17.4633 18.4916 17.5084C18.0954 18.0124 17.7031 18.5198 17.3017 19.0195C17.1057 19.2634 16.9071 19.3095 16.6249 19.181C16.2237 18.9984 15.8205 18.8177 15.4315 18.6098C14.4874 18.105 13.654 17.4451 12.9246 16.6484C12.3488 16.0195 11.8549 15.3264 11.4268 14.5837C11.2581 14.2911 11.2829 14.0916 11.5 13.8508C11.6517 13.6827 11.7968 13.5081 11.9453 13.3369C12.1803 13.0661 12.3818 12.7732 12.5192 12.4361C12.5827 12.2804 12.5994 12.1236 12.5442 11.9644C12.5056 11.8531 12.4553 11.7461 12.4113 11.6366C12.0654 10.7769 11.7223 9.91591 11.3721 9.05805C11.2994 8.88014 11.2105 8.70708 11.1108 8.54359C11.0004 8.36245 10.8277 8.27855 10.6176 8.28034C10.4705 8.28159 10.3233 8.28058 10.1762 8.28058C10.1762 8.28077 10.1762 8.28096 10.1762 8.28115C9.9851 8.28115 9.79189 8.26247 9.60339 8.28518C9.24874 8.32789 8.97377 8.52725 8.73266 8.7916C8.39673 9.15992 8.09007 9.54852 7.88035 10.0083C7.44052 10.9726 7.36455 11.975 7.59825 13.0066C7.7395 13.63 7.98284 14.2126 8.27795 14.7738C8.50366 15.203 8.77419 15.6019 9.04611 16.001C9.67404 16.9226 10.3645 17.7901 11.1295 18.5944C11.6689 19.1614 12.2415 19.6907 12.8546 20.1727C13.5701 20.7353 14.3278 21.2275 15.1479 21.6141C15.8241 21.9329 16.5224 22.1923 17.226 22.439C17.8334 22.6519 18.4529 22.7817 19.0955 22.7476C19.4103 22.731 19.7316 22.7113 20.0352 22.6326C20.7097 22.4576 21.2978 22.0996 21.8187 21.6276C22.0223 21.4432 22.2082 21.2378 22.3157 20.978C22.5193 20.486 22.6309 19.9703 22.639 19.4346C22.6454 19.0185 22.5993 18.9495 22.2389 18.7658Z"
                    fill="white" />
            </g>
            <defs>
                <clipPath id="clip0_25_1839">
                    <rect width="30" height="31" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </a>

    <!-- Navbar menu -->
    <nav class="navbar">
        <a class="nav-logo" href="index.php">
            <img src="assets/img/HASHRATE-AGENCY.svg" alt="Hashrate logo">
        </a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="members-program.html">Programa de miembros</a>
                <svg class="nav-item__separator" width="3" height="47" viewBox="0 0 3 47" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.5" y1="6.55671e-08" x2="1.5" y2="47" stroke="white" stroke-width="3" />
                </svg>
            </li>
            <li class="nav-item">
                <a href="mcpay.html">MCPay</a>
                <svg class="nav-item__separator" width="3" height="47" viewBox="0 0 3 47" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.5" y1="6.55671e-08" x2="1.5" y2="47" stroke="white" stroke-width="3" />
                </svg>
            </li>
            <li class="nav-item">
                <a href="faqs.html">FAQS</a>
            </li>
            <li class="nav-item">
                <a href="https://wa.me/573332440167" target="_blank" class="contact">
                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_25_1839)">
                            <path
                                d="M28.5948 8.84722C27.9138 7.3516 27.0175 6.00607 25.9131 4.80819C24.7381 3.53364 23.3952 2.48682 21.8745 1.68409C20.6184 1.02106 19.2976 0.551868 17.9106 0.27885C17.1357 0.12633 16.3547 0.0366578 15.5662 0.00881225C14.7158 -0.0212173 13.8701 0.0259675 13.0272 0.143238C11.496 0.356281 10.034 0.807798 8.64058 1.49235C7.54432 2.0309 6.52754 2.69871 5.58919 3.49353C4.67977 4.26384 3.86761 5.12988 3.15573 6.09471C2.16433 7.43838 1.40727 8.90995 0.886646 10.5102C0.606525 11.3711 0.404118 12.2509 0.276726 13.1487C0.17886 13.8385 0.12952 14.5321 0.123198 15.2295C0.11543 16.0868 0.174732 16.9386 0.305561 17.7848C0.487671 18.9628 0.797727 20.1042 1.23894 21.2078C1.48174 21.8152 1.75985 22.4046 2.07675 22.9745C2.1048 23.025 2.10843 23.0685 2.09368 23.1238C1.52899 25.2418 0.965791 27.3602 0.402312 29.4785C0.274856 29.9577 0.147055 30.4368 0.0195632 30.9159C0.013277 30.9395 0.00842937 30.9636 0 31C0.0489729 30.9887 0.088725 30.9808 0.127787 30.9703C2.07224 30.4451 4.01663 29.9196 5.96106 29.3943C6.5847 29.2258 7.20866 29.0585 7.83191 28.8886C7.89059 28.8726 7.93813 28.8783 7.99175 28.908C9.10708 29.5265 10.281 29.989 11.5119 30.2978C12.1966 30.4695 12.889 30.6002 13.5917 30.659C14.0605 30.6982 14.5313 30.7303 15.0014 30.7344C16.5283 30.7477 18.0224 30.518 19.4805 30.0502C21.4287 29.4251 23.1799 28.4303 24.7333 27.0694C26.1687 25.8118 27.3345 24.3284 28.2274 22.6203C28.9266 21.2829 29.4223 19.8692 29.7096 18.3788C29.8659 17.5679 29.9622 16.7502 29.9878 15.9238C29.9884 15.9046 29.9958 15.8856 30 15.8664V14.867C29.9919 14.7519 29.9821 14.6369 29.9759 14.5217C29.8685 12.5393 29.414 10.6462 28.5948 8.84722ZM26.8532 19.3648C26.4162 20.7283 25.7715 21.9804 24.9218 23.1195C23.806 24.6154 22.4375 25.8054 20.816 26.6857C19.6927 27.2956 18.5044 27.7137 17.2547 27.9451C16.6554 28.0561 16.0509 28.1184 15.4415 28.1374C13.7315 28.1907 12.082 27.8918 10.4908 27.2492C9.83874 26.9859 9.21554 26.6618 8.61544 26.2904C8.52085 26.2318 8.42742 26.171 8.33035 26.1172C8.30169 26.1013 8.25943 26.0942 8.22835 26.1025C6.75997 26.4969 5.29216 26.8935 3.82424 27.2897C3.74911 27.31 3.67367 27.3289 3.58401 27.3522C3.72554 26.8201 3.86257 26.3046 3.9998 25.7891C4.27301 24.7628 4.54591 23.7364 4.8207 22.7105C4.83546 22.6554 4.8207 22.6163 4.7946 22.5708C4.53152 22.1127 4.25743 21.6607 4.01184 21.1928C3.66855 20.5389 3.40766 19.8475 3.19511 19.1371C2.94981 18.3173 2.78728 17.4806 2.70465 16.6271C2.58422 15.3834 2.63986 14.1479 2.87207 12.9215C3.07941 11.8265 3.42264 10.7777 3.89915 9.77502C4.4407 8.6355 5.13227 7.60161 5.97253 6.67451C7.08106 5.45142 8.37134 4.48266 9.84651 3.777C10.7669 3.33672 11.7256 3.01799 12.7229 2.82238C13.4475 2.68026 14.1782 2.60471 14.9161 2.59573C16.2766 2.57918 17.6045 2.78299 18.8988 3.21342C20.0287 3.58917 21.0834 4.12377 22.0623 4.81553C23.2921 5.68456 24.3382 6.74591 25.2025 7.99645C25.9268 9.04457 26.4815 10.1808 26.8687 11.4036C27.0971 12.1249 27.2606 12.8617 27.3599 13.613C27.429 14.1357 27.4657 14.6611 27.4734 15.1891C27.4942 16.6172 27.2875 18.0092 26.8532 19.3648Z"
                                fill="white" />
                            <path
                                d="M22.2389 18.7658C21.9006 18.5934 21.5634 18.4184 21.223 18.2502C20.6396 17.9618 20.0556 17.6746 19.4683 17.3946C19.3271 17.3273 19.1745 17.2811 19.0231 17.2421C18.8618 17.2005 18.7168 17.2516 18.6001 17.3751C18.5609 17.4165 18.527 17.4633 18.4916 17.5084C18.0954 18.0124 17.7031 18.5198 17.3017 19.0195C17.1057 19.2634 16.9071 19.3095 16.6249 19.181C16.2237 18.9984 15.8205 18.8177 15.4315 18.6098C14.4874 18.105 13.654 17.4451 12.9246 16.6484C12.3488 16.0195 11.8549 15.3264 11.4268 14.5837C11.2581 14.2911 11.2829 14.0916 11.5 13.8508C11.6517 13.6827 11.7968 13.5081 11.9453 13.3369C12.1803 13.0661 12.3818 12.7732 12.5192 12.4361C12.5827 12.2804 12.5994 12.1236 12.5442 11.9644C12.5056 11.8531 12.4553 11.7461 12.4113 11.6366C12.0654 10.7769 11.7223 9.91591 11.3721 9.05805C11.2994 8.88014 11.2105 8.70708 11.1108 8.54359C11.0004 8.36245 10.8277 8.27855 10.6176 8.28034C10.4705 8.28159 10.3233 8.28058 10.1762 8.28058C10.1762 8.28077 10.1762 8.28096 10.1762 8.28115C9.9851 8.28115 9.79189 8.26247 9.60339 8.28518C9.24874 8.32789 8.97377 8.52725 8.73266 8.7916C8.39673 9.15992 8.09007 9.54852 7.88035 10.0083C7.44052 10.9726 7.36455 11.975 7.59825 13.0066C7.7395 13.63 7.98284 14.2126 8.27795 14.7738C8.50366 15.203 8.77419 15.6019 9.04611 16.001C9.67404 16.9226 10.3645 17.7901 11.1295 18.5944C11.6689 19.1614 12.2415 19.6907 12.8546 20.1727C13.5701 20.7353 14.3278 21.2275 15.1479 21.6141C15.8241 21.9329 16.5224 22.1923 17.226 22.439C17.8334 22.6519 18.4529 22.7817 19.0955 22.7476C19.4103 22.731 19.7316 22.7113 20.0352 22.6326C20.7097 22.4576 21.2978 22.0996 21.8187 21.6276C22.0223 21.4432 22.2082 21.2378 22.3157 20.978C22.5193 20.486 22.6309 19.9703 22.639 19.4346C22.6454 19.0185 22.5993 18.9495 22.2389 18.7658Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_25_1839">
                                <rect width="30" height="31" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <div>Contacto</div>
                </a>
            </li>
        </ul>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

    </nav>

    <!-- Background -->
    <div class="background__container">

        <!-- Header -->
        <header>
            <h2>Dale <span class="header__title-glow">poder </span><span class="header__title-span">a tu proyecto</span>
            </h2>

            <h3 class="header__subtitle">Conectando con los mejores influencers</h3>

            <div class="header__container">
                <svg class="header__decoration" width="316" height="60" viewBox="0 0 316 60" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M187.625 29.625C162.427 32.0698 160.445 34.0518 158 59.25C155.555 34.0518 153.573 32.0698 128.375 29.625C153.573 27.1802 155.555 25.1983 158 0C160.445 25.1983 162.427 27.1802 187.625 29.625Z"
                        fill="#BCA3FF" />
                    <path
                        d="M316 29.625C290.802 32.0698 288.82 34.0518 286.375 59.25C283.93 34.0518 281.948 32.0698 256.75 29.625C281.948 27.1802 283.93 25.1983 286.375 0C288.82 25.1983 290.802 27.1802 316 29.625Z"
                        fill="#BCA3FF" />
                    <path
                        d="M59.25 29.625C34.0517 32.0698 32.0698 34.0518 29.625 59.25C27.1802 34.0518 25.1983 32.0698 0 29.625C25.1983 27.1802 27.1802 25.1983 29.625 0C32.0698 25.1983 34.0517 27.1802 59.25 29.625Z"
                        fill="#BCA3FF" />
                </svg>
                <a class="header__anchor button-anchor" href="#creadores">Mira más</a>
                <svg class="header__decoration" width="316" height="60" viewBox="0 0 316 60" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M187.625 29.625C162.427 32.0698 160.445 34.0518 158 59.25C155.555 34.0518 153.573 32.0698 128.375 29.625C153.573 27.1802 155.555 25.1983 158 0C160.445 25.1983 162.427 27.1802 187.625 29.625Z"
                        fill="#BCA3FF" />
                    <path
                        d="M316 29.625C290.802 32.0698 288.82 34.0518 286.375 59.25C283.93 34.0518 281.948 32.0698 256.75 29.625C281.948 27.1802 283.93 25.1983 286.375 0C288.82 25.1983 290.802 27.1802 316 29.625Z"
                        fill="#BCA3FF" />
                    <path
                        d="M59.25 29.625C34.0517 32.0698 32.0698 34.0518 29.625 59.25C27.1802 34.0518 25.1983 32.0698 0 29.625C25.1983 27.1802 27.1802 25.1983 29.625 0C32.0698 25.1983 34.0517 27.1802 59.25 29.625Z"
                        fill="#BCA3FF" />
                </svg>
            </div>

            <!-- Down arrow -->
            <svg id="down-arrow" width="66" height="111" viewBox="0 0 66 111" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.8">
                    <path d="M63.6203 2L32.9996 32.6207L2.37891 2" stroke="white" stroke-width="4"
                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M63.6203 40L32.9996 70.6207L2.37891 40" stroke="white" stroke-opacity="0.6"
                        stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M63.6203 78L32.9996 108.621L2.37891 78" stroke="white" stroke-opacity="0.3"
                        stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>


        </header>

        <main>

            <!-- Stars Script -->
            <div id="stars"></div>

            <h3 class="main__title" id="creadores">Un poco de NUESTRAS campañas</h3>
            <svg class="main__decoration" width="1920" height="552" viewBox="0 0 1920 552" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M174 316.5C162.092 317.697 161.155 318.667 160 331C158.845 318.667 157.908 317.697 146 316.5C157.908 315.303 158.845 314.333 160 302C161.155 314.333 162.092 315.303 174 316.5Z"
                    fill="#BCA3FF" />
                <path
                    d="M578 143.5C566.092 144.697 565.155 145.667 564 158C562.845 145.667 561.908 144.697 550 143.5C561.908 142.303 562.845 141.333 564 129C565.155 141.333 566.092 142.303 578 143.5Z"
                    fill="#BCA3FF" />
                <path
                    d="M1548 399.5C1536.09 400.697 1535.16 401.667 1534 414C1532.84 401.667 1531.91 400.697 1520 399.5C1531.91 398.303 1532.84 397.333 1534 385C1535.16 397.333 1536.09 398.303 1548 399.5Z"
                    fill="#BCA3FF" />
                <path
                    d="M1791 154.5C1779.09 155.697 1778.16 156.667 1777 169C1775.84 156.667 1774.91 155.697 1763 154.5C1774.91 153.303 1775.84 152.333 1777 140C1778.16 152.333 1779.09 153.303 1791 154.5Z"
                    fill="#BCA3FF" />
            </svg>

            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=tzD1G5YrCJg&t=2s" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/Luki-vid.jpg" alt="Luki video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/creators-vids/Luki-pic.jpg" alt="Luki logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;Luki</h4>
                                <p class="card__description">112.510 vistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=0bZT9NusBsg&t=2s" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/MAAU-vid.jpg" alt="MAAU video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/creators-vids/MAAU-pic.jpg" alt="MAAU logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;MAAU</h4>
                                <p class="card__description">302.701 vistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=0bZT9NusBsg&t=2s" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/Johan_speak-vid.jpg" alt="Johan Speak video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/Creators-vids/Johan_speak-pic.jpg" alt="Johan Speak logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;Johan Speak</h4>
                                <p class="card__description">356.399 vistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=x1-sSu69lbs" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/Julian_abdala-vid.jpg" alt="Julian Abdala video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/creators-vids/Julian_abdala-pic.jpg" alt="Julian Abdala logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;JulianAbdala</h4>
                                <p class="card__description">830.905 vistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=B8nFXcw1-dQ" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/John_GB-vid.jpg" alt="John GB video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/creators-vids/John_GB-pic.jpg" alt="John GB logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;John GB</h4>
                                <p class="card__description">514.184 vistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=dzKeb8CJCe4&t=1s" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/REITE_GRONE-vid.jpg" alt="REITE GRONE video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/creators-vids/REITE_GRONE-pic.jpg" alt="REITE GRONE logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;REITEGRONE</h4>
                                <p class="card__description">68.466 vistas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider main container -->
            <div class="swiper--reverse">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=U1BFWQxe_Jc&t=4s" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/DEValen-vid.jpg" alt="DEValen video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/creators-vids/DEValen-pic.jpg" alt="DEValen logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;DEValen</h4></a>
                                <p class="card__description">595.246 vistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=TqCMbbbn1M4&t=9s" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/Tomex-vid.jpg" alt="Tomex video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/creators-vids/Tomex-pic.jpg" alt="Tomex Logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;Tomex</h4>
                                <p class="card__description">313.423 vistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=LqfTkues4vg" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/LHDA-vid.jpg" alt="LDHA video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/creators-vids/LHDA-pic.jpg" alt="LDHA Logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;LDHA</h4>
                                <p class="card__description">237.845 vistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=6Lj-fXDtXf0" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/Farfadox-vid.jpg" alt="Farfadox video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/creators-vids/Farfadox-pic.jpg" alt="Farfadox Logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;Farfadox</h4>
                                <p class="card__description">541.453 vistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=R3RYsX_rOIc&t=1s" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/Crisgreen-vid.jpg" alt="Crisgreen video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/creators-vids/Crisgreen-pic.jpg" alt="Crisgreen">
                            <div class="card__text">
                                <h4 class="card__title">&#64;CrisGreen</h4>
                                <p class="card__description">182.937 vistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div>
                                <a href="https://www.youtube.com/watch?v=LrX3FUtGY_0&t=1s" target="_blank">
                                    <img class="card__image" src="assets/img/creators-vids/Luis_san-vid.jpg" alt="Luis San video">
                                </a>
                            </div>
                            <img class="card__logo" src="assets/img/Creators-vids/Luis_san-logo.jpg" alt="Luis San Logo">
                            <div class="card__text">
                                <h4 class="card__title">&#64;Luis San</h4>
                                <p class="card__description">304.374 vistas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="enterprises">
                <h3 class="main__title enterprises__title">Los que saben <span>confian en nosotros.</span></h3>

                <div class="main__gif-container">
                    <img class="main__gif" src="assets/img/main-decoration/RUEDA.gif" alt="Rueda GIF">
                    <img class="main__gif--right" src="assets/img/main-decoration/RUEDA.gif" alt="Rueda GIF">
                </div>

                <div class="enterprises__container">

                    <div class="images__container">
                        <img class="enterprises__image" src="assets/img//branches/LOGO-GENSHIN-IMPACT.svg"
                            alt="Genshin Impact Logo">
                        <img class="enterprises__image" src="assets/img//branches/LOGO-TIKTOK.svg" alt="TikTok Logo">
                        <img class="enterprises__image" src="assets/img//branches/LOGO-DBD.svg" alt="Dead By Daylight Logo">
                        <img class="enterprises__image" src="assets/img//branches/LOGO-BINANCE.svg" alt="Binance Logo">
                        <img class="enterprises__image" src="assets/img//branches/LOGO-FIVER.svg" alt="Fiverr Logo">
                        <img class="enterprises__image" src="assets/img//branches/LOGO-HONKAI.svg" alt="Honkai Star Rail Logo">
                        <img class="enterprises__image" src="assets/img//branches/LOGO-OPERA-GX.svg" alt="Opera Logo">
                        <img class="enterprises__image" src="assets/img//branches/LOGO-WONDERSHARE.svg" alt="Wondershare Logo">
                        <img class="enterprises__image" src="assets/img//branches/LOGO-WARGAMING-NET.svg" alt="Wargaming Logo">
                        <img class="enterprises__image" src="assets/img//branches/surfshark.png" alt="Surfshark Logo">
                        <img class="enterprises__image" src="assets/img//branches/LOGO-WORLD-OF-WARSHIP.svg"
                            alt="World of Warship Logo">
                        <img class="enterprises__image" id="about-us" src="assets/img//branches/LOGO-CYBER-GHOST.svg"
                            alt="Cyberghost Logo">
                    </div>

                </div>

            </section>


            <section class="our-mission">

                <div class="our-mission__decoration">
                    <svg width="1780" height="876" viewBox="0 0 1780 876" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="star"
                            d="M33 16.5C18.9655 17.8617 17.8617 18.9655 16.5 33C15.1383 18.9655 14.0345 17.8617 0 16.5C14.0345 15.1384 15.1383 14.0345 16.5 0C17.8617 14.0345 18.9655 15.1384 33 16.5Z"
                            fill="#BCA3FF" />
                        <path class="star"
                            d="M33 859.5C18.9655 860.862 17.8617 861.966 16.5 876C15.1383 861.966 14.0345 860.862 0 859.5C14.0345 858.138 15.1383 857.035 16.5 843C17.8617 857.035 18.9655 858.138 33 859.5Z"
                            fill="#BCA3FF" />
                        <path class="star"
                            d="M1742 30.5C1730.09 31.6966 1729.16 32.6667 1728 45C1726.84 32.6667 1725.91 31.6966 1714 30.5C1725.91 29.3034 1726.84 28.3333 1728 16C1729.16 28.3333 1730.09 29.3034 1742 30.5Z"
                            fill="#BCA3FF" />
                        <path
                            d="M1780 82.5C1768.09 83.6966 1767.16 84.6667 1766 97C1764.84 84.6667 1763.91 83.6966 1752 82.5C1763.91 81.3034 1764.84 80.3333 1766 68C1767.16 80.3333 1768.09 81.3034 1780 82.5Z"
                            fill="#BCA3FF" />
                    </svg>
                </div>

                <div class="our-mission__text-container">

                    <h3 class="our-mission__title">
                        <span class="our-mission__title-span-1">Conoce</span> Nuestra <span
                            class="our-mission__title-span-2">misión</span>
                        <a href="#mcpay" class="our-mission__anchor">Ey, mirá <span
                                class="our-mission__anchor-span">nuestros servicios <span
                                    class="our-mission__anchor-span-arrow">↓↓↓</span></span></a>
                    </h3>

                    <div>
                        <div>
                            <svg id="our-mission__rocket" width="513" height="1144" viewBox="0 0 513 1144" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M513 887.5C371.339 887.5 256.5 772.661 256.5 631C256.5 772.661 141.661 887.5 0 887.5C141.661 887.5 256.5 1002.34 256.5 1144C256.5 1002.34 371.339 887.5 513 887.5Z"
                                    fill="#BCA3FF" />
                                <line x1="256" y1="234" x2="256" y2="1026" stroke="#BCA3FF" stroke-width="8" />
                            </svg>
                            <img class="our-mission__rocket-gif" src="assets/img/main-decoration/rocket-gif.gif" alt="Cohete">
                        </div>
                        <svg class="our-mission__svg" width="691" height="503" viewBox="0 0 691 503" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M373 251.5C214.368 272.255 201.891 289.081 186.5 503C171.109 289.081 158.632 272.255 0 251.5C158.632 230.745 171.109 213.92 186.5 0C201.891 213.92 214.368 230.745 373 251.5Z"
                                fill="#BCA3FF" />
                            <path id="our-mission__right-star"
                                d="M746 256.5C587.368 267.93 574.891 277.196 559.5 395C544.109 277.196 531.632 267.93 373 256.5C531.632 245.07 544.109 235.805 559.5 118C574.891 235.805 587.368 245.07 746 256.5Z"
                                fill="#BCA3FF" />
                        </svg>
                    </div>

                    <div class="our-mission__paragraph">
                        <p class="our-mission__text">En Hashrate transformamos la manera en cómo las empresas e
                            influencers se conectan, para lograr una misión: <b>OBTENER RESULTADOS.</b></p>

                        <p class="our-mission__text"> Gracias a nuestra pasión por hacer las cosas perfectas y a
                            nuestro equipo de trabajo garantizamos la rapidez, seguimiento y la finalización de cada
                            campaña a la perfección.</p>

                        <p class="our-mission__text">Con Hashrate Agency cada colaboración está <b> DISEÑADA PARA EL
                                EXITO.</b></p>
                    </div>

                </div>

            </section>


            <section class="events">
                <h3 class="events__title">Organizamos los mejores eventos presenciales para influencers</h3>

                <div class="events__text-container">
                    <p class="events__paragraph">Somos quienes organizan y tienen el placer de estar en cada uno de
                        los eventos mas famosos del mundo que tanto la gente disfruta año tras año.</p>
                    <img class="events__uranus" src="assets/img/main-decoration/urano-1.gif" alt="Urano GIF">
                </div>

                <div class="gallery js-flickity">
                    <div class="gallery-cell"><img src="assets/img/gallery/AGS.png" alt="Argentina Game Show"></div>
                    <div class="gallery-cell"><img src="assets/img/gallery/HERO-ANIME.png" alt="Hero Anime Café"></div>
                    <div class="gallery-cell"><img src="assets/img/gallery/CC.png" alt="Comic Con"></div>
                </div>

            </section>


            <div class="our-services" id="why-choose-us">
                <div class="box-ribbons up">
                    <div class="wrapper-ribbon ribbon-graphic-2">
                        <div class="ribbon">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                        </div>
                    </div>
                </div>


                <div class="our-services__container">

                    <section id="members-program">

                        <h3 class="our-services__title-members">Programa de miembros</h3>

                        <a href="members-program.html" class="our-services__anchor-container">
                            <img class="our-services__image" src="assets/img/members/your-own-dom.svg" alt="Ventaja">
                            <img class="our-services__image" src="assets/img/members/assist.svg" alt="Ventaja">
                            <img class="our-services__image" src="assets/img/members/group.svg" alt="Ventaja">
                            <img class="our-services__image" src="assets/img/members/whenever.svg" alt="Ventaja">
                            <img class="our-services__image" src="assets/img/members/expansion.svg" alt="Ventaja">
                        </a>

                        <a class="our-services__anchor button-anchor" href="members-program.html">Mirá Más →</a>

                    </section>


                    <section id="mcpay">

                        <h3 class="our-services__title">MCPAY <span class="our-services__title-span">Plataforma de
                                pagos</span></h3>

                        <a href="mcpay.html" class="our-services__anchor-container">
                            <img class="our-services__image" src="assets/img/mcpay/check.svg" alt="Ventaja">
                            <img class="our-services__image" src="assets/img/mcpay/comisions.svg" alt="Ventaja">
                            <img class="our-services__image" src="assets/img/mcpay/methods.svg" alt="Ventaja">
                            <img class="our-services__image" src="assets/img/mcpay/exclusivity.svg" alt="Ventaja">
                            <img class="our-services__image" src="assets/img/mcpay/personal.svg" alt="Ventaja">
                        </a>

                        <a class="our-services__anchor button-anchor" href="mcpay.html">Mirá Más →</a>

                    </section>
                </div>


                <div class="box-ribbons bottom">
                    <div class="wrapper-ribbon ribbon-graphic-2">
                        <div class="ribbon">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                            <div class="box-ribbon"><img
                                    src="assets/img/ribbon/hand.png"
                                    alt="" class="img-text services"></div><img
                                src="assets/img/ribbon/mas-de-nosotros.svg"
                                loading="lazy" alt="" class="image-9">
                        </div>
                    </div>
                </div>
            </div>


            <section class="more-doubts">

                <div class="our-services__text-container">

                    <h3 class="our-services__title">¿Tienes <span class="our-services__title-span--more"><span
                                id="span-plus">+ +</span> más</span> dudas?</h3>


                    <p class="our-services__paragraph">En nuestro equipo siempre vamos a estar pensando en vos, y
                        por eso estamos dispuestos a brindarte <b>toda la información </b>de la mejor calidad y de
                        la manera más clara posible, por eso preparamos <b>una sección exclusiva </b>para que te
                        saque todas las dudas.
                        <a class="our-services__anchor button-anchor" id="read-more" href="faqs.html">Leer más →</a>
                    </p>

                </div>

                <form id="contact-form">
                    <div>
                        <svg class="form__decoration--line" width="191" height="730" viewBox="0 0 191 730" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <line x1="96" y1="1.74846e-07" x2="96" y2="635" stroke="#BCA3FF" stroke-width="8" />
                            <path
                                d="M191 634.5C138.257 634.5 95.5 591.743 95.5 539C95.5 591.743 52.7432 634.5 0 634.5C52.7432 634.5 95.5 677.257 95.5 730C95.5 677.257 138.257 634.5 191 634.5Z"
                                fill="#BCA3FF" />
                        </svg>
                    </div>
                    <div class="form__inputs-group">
                        <input type="text" placeholder="Nombre" id="name" name="name">
                        <input type="email" placeholder="Email" id="email-contact" name="email-contact">
                    </div>

                    <div class="form__inputs-group">
                        <select id="type" name="type">
                            <option value="option1">Influencer</option>
                            <option value="option2">Empresa</option>
                        </select>
                    </div>

                    <textarea placeholder="Contanos sobre vos" id="message" name="message" rows="5"></textarea>


                    <div class="form__button-container">
                        <svg width="25" height="25" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.5 0C23.8991 11.5352 27.4648 15.1013 39 19.5C27.4648 23.899 23.8991 27.4648 19.5 39C15.1011 27.4648 11.5352 23.899 0 19.5C11.5352 15.1013 15.1011 11.5352 19.5 0Z"
                                fill="#BCA3FF" />
                        </svg>
                        <button id="mail-form-button" class="btn button h-captcha" type="submit" data-callback="onSubmitAllData" data-size="invisible"
                            data-sitekey="30000000-ffff-ffff-ffff-000000000001"><span class="btn-span">Contactanos</span><img
                                src="https://i.cloudup.com/2ZAX3hVsBE-3000x3000.png" alt="Check" height="62" width="62"></button>
                        <svg width="25" height="25" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.5 0C23.8991 11.5352 27.4648 15.1013 39 19.5C27.4648 23.899 23.8991 27.4648 19.5 39C15.1011 27.4648 11.5352 23.899 0 19.5C11.5352 15.1013 15.1011 11.5352 19.5 0Z"
                                fill="#BCA3FF" />
                        </svg>
                    </div>

                    <svg class="form__decoration" width="17" height="201" viewBox="0 0 17 201" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_117_1980)">
                            <path
                                d="M17 8.60956C17 13.3645 13.1944 17.2191 8.5 17.2191C3.80558 17.2191 -5.8418e-07 13.3645 -3.76336e-07 8.60956C-1.68491e-07 3.85463 3.80558 1.66347e-07 8.5 3.71547e-07C13.1944 5.76747e-07 17 3.85463 17 8.60956Z"
                                fill="#A0A0FF" />
                            <path
                                d="M17 45.3659C17 50.1208 13.1944 53.9755 8.5 53.9755C3.80558 53.9755 -5.8418e-07 50.1208 -3.76336e-07 45.3659C-1.68491e-07 40.611 3.80558 36.7563 8.5 36.7563C13.1944 36.7563 17 40.611 17 45.3659Z"
                                fill="#A0A0FF" />
                            <path
                                d="M17 82.1218C17 86.8767 13.1944 90.7313 8.5 90.7313C3.80558 90.7313 -5.8418e-07 86.8767 -3.76336e-07 82.1218C-1.68491e-07 77.3668 3.80558 73.5122 8.5 73.5122C13.1944 73.5122 17 77.3668 17 82.1218Z"
                                fill="#A0A0FF" />
                            <path
                                d="M17 118.878C17 123.633 13.1944 127.488 8.5 127.488C3.80558 127.488 -5.8418e-07 123.633 -3.76336e-07 118.878C-1.68491e-07 114.123 3.80558 110.269 8.5 110.269C13.1944 110.269 17 114.123 17 118.878Z"
                                fill="#A0A0FF" />
                            <path
                                d="M17 155.634C17 160.389 13.1944 164.244 8.5 164.244C3.80558 164.244 -5.8418e-07 160.389 -3.76336e-07 155.634C-1.68491e-07 150.88 3.80558 147.025 8.5 147.025C13.1944 147.025 17 150.88 17 155.634Z"
                                fill="#A0A0FF" />
                            <path
                                d="M17 192.39C17 197.145 13.1944 201 8.5 201C3.80558 201 -5.8418e-07 197.145 -3.76336e-07 192.39C-1.68491e-07 187.635 3.80558 183.781 8.5 183.781C13.1944 183.781 17 187.635 17 192.39Z"
                                fill="#A0A0FF" />
                        </g>
                        <defs>
                            <clipPath id="clip0_117_1980">
                                <rect width="201" height="17" fill="white"
                                    transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 0)" />
                            </clipPath>
                        </defs>
                    </svg>

                </form>

                <div class="background__container-2"></div>

            </section>

            <footer>
                <div class="footer-container">
                    <div class="column">
                        <ul>
                            <li class="li"><a href="#about-us">Sobre Nosotros</a></li>
                            <li class="li"><a href="#why-choose-us">¿Por qué elegirnos?</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul>
                            <li class="li"><a href="faqs.html">FAQS</a></li>
                            <li class="li"><a href="#contact-form">Contactanos</a></li>
                            <li class="li"><a href="https://www.hcaptcha.com/privacy">Politicas de Privacidad</a></li>
                            <li class="li"><a href="https://www.hcaptcha.com/terms">Terminos y Condiciones</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul>
                            <li class="li"><a href="mcpay.html">MCPAY</a></li>
                            <li class="li"><a href="members-program.html">Programa de Miembros</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer__social-container">
                    <a href="#"><img class="footer-logo" src="assets/img/HASHRATE-AGENCY.svg" alt="Hashrate logo"></a>
                    <div class="footer__social">
                        <a href="https://www.instagram.com/hashrateagency/" target="_blank"><img
                                class="footer__social-link" src="assets/img/social/IG.png" alt="Instagram Logo"></a>
                        <a href="https://www.linkedin.com/company/hashrateagency/?viewAsMember=true"
                            target="_blank"><img class="footer__social-link" src="assets/img/social/LKD.png"
                                alt="LinkedIn Logo"></a>
                        <a href="https://x.com/hashrateagency" target="_blank"><img class="footer__social-link"
                                src="assets/img/social/TWT.png" alt="Twitter Logo"></a>
                    </div>
                </div>
            </footer>

        </main>

    </div>


    <?php
    require('assets/backend/util.php');
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js" integrity="sha512-pY1t/ADgTwbfGbw0+mRGd33EroA5YgRUWhQNFpPIAdBzyoSb38FsFrf4wBTcS3GFPdTfgtpRrbGCkdl2C2OXYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets//js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="assets/js/swiper.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/util.js"></script>
    <script>
        function onSubmitMailOnly(token) {
            let data = {
                "contactForm": "false",
                "mail": getValueOfElementById("email"),
                "captcha": token,
                "lang": "<?php echo $lang; ?>"
            }

            waitMessage();

            sendForm(data);
        }

        function onSubmitAllData(token) {
            let data = {
                "contactForm": "true",
                "name": getValueOfElementById("name"),
                "mail": getValueOfElementById("email-contact"),
                "information": getValueOfElementById("message"),
                "captcha": token,
                "lang": "<?php echo $lang; ?>"
            }

            waitMessage();

            sendForm(data);
        }

        function sendForm(data) {
            $.ajax({
                url: "./assets/backend/forms-handler.php",
                type: "POST",
                data: data,
                complete: function(response) {
                    let code = response.responseJSON.code;

                    if (code == 0) {
                        <?php successForm(false, $lang) ?>
                        return;
                    }

                    if (code == 1) {
                        <?php invalidCaptcha(false, $lang) ?>
                        return;
                    }

                    if (code == 2) {
                        <?php invalidEmail(false, $lang) ?>
                        return;
                    }

                    if (code == 3) {
                        <?php invalidData(false, $lang) ?>
                        return;
                    }

                    <?php unknownError(false, $lang) ?>
                    return;
                }
            });
        }

        function waitMessage() {
            let timerInterval
            Swal.fire({
                title: 'Enviando petición',
                html: 'El sistema está verificando su información, por favor, aguarde unos instantes...',
                showConfirmButton: false,
                allowOutsideClick: false,
                willOpen: () => {
                    Swal.showLoading()
                    timerInterval = setInterval(() => {}, 100)
                },
                didClose: () => {
                    clearInterval(timerInterval)
                }
            })
        }
    </script>

</body>

</html>