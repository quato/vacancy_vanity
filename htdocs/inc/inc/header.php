<?php

//print "<canvas id=cbody>";
print "
	<header>
		<div class=\"top-header container-fluid\">
			<div class=\"top-header-wrapper d-flex align-items-center\">
				<div class=\"top-header__vertion\">
                                                <a href=\"https://airdrop-hunter.site\" class=logo target=_blank>
";
$d = __DIR__;
$d = dirname($d);
$d = dirname($d);
$f = $d."/images/logo4.svg";
$a = file_get_contents($f);
print $a;
//                                                      <img src=\"/images/logo2.svg\" alt=\"LOGO\" />
print "
                                                </a>
				</div>
				

				<div class=\"top-header-wrap d-flex align-items-end\">


					<div class=\"top-header__info  d-flex align-items-center\">
";

print "
<div class=\"deposit\">
        <button class=\"art-button-3 btn btn-primary btn-sm\" onclick=\"btn_buy_refill2();\">Deposit</button>
</div>&nbsp;
";

print "

						<div class=\"networks\">


							<a href=\"#\" class=\"networks__active top-header__poligon\" id=\"dropdownNetwork\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
								<span class=\"networks__btn d-flex align-items-center\">
									<img src=\"/images/poligon.svg\" alt=\"\" />
									<span>Polygon</span>
								</span>
								<svg width=\"11\" height=\"7\" viewBox=\"0 0 11 7\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
									<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.982895 0.640364C1.30774 0.315516 1.83443 0.315517 2.15928 0.640366L5.69226 4.17336L9.22526 0.640365C9.55011 0.315516 10.0768 0.315516 10.4016 0.640365C10.7265 0.965213 10.7265 1.4919 10.4016 1.81675L6.28045 5.93793C6.12445 6.09393 5.91287 6.18157 5.69226 6.18157C5.47164 6.18157 5.26007 6.09393 5.10407 5.93793L0.982893 1.81674C0.658045 1.4919 0.658046 0.965212 0.982895 0.640364Z\" fill=\"black\"/>
									</svg>						
							</a>
							<div class=\"networks__links dropdown-menu\" aria-labelledby=\"dropdownNetwork\">
								<div class=\"name\">Select a network</div>
								<div class=\"networks-link\">
									<a href=\"#\" class=\"networks__link\" data-chain-id=\"0x1\">
										<img src=\"/images/ethereum.svg\" alt=\"\" />
										<span>Ethereum</span>
									</a>
									<a href=\"#\" class=\"scan\">
										<span>Etherscan</span>
										<img src=\"/images/arrow.svg\" alt=\"\" />
									</a>
								</div>
								<div class=\"networks-link\">
									<a href=\"#\" class=\"networks__link\" data-chain-id=\"0x38\">
										<img src=\"/images/bsc.svg\" alt=\"\" />
										<span>BSC</span>
									</a>
									<a href=\"#\" class=\"scan\">
										<span>BscScan</span>
										<img src=\"/images/arrow.svg\" alt=\"\" />
									</a>
								</div>
								<div class=\"networks-link active\">
									<a href=\"#\" class=\"networks__link\" data-chain-id=\"0x89\">
										<img src=\"/images/poligon.svg\" alt=\"\" />
										<span>Polygon</span>
									</a>
									<a href=\"#\" class=\"scan\">
										<span>Polygonscan</span>
										<img src=\"/images/arrow.svg\" alt=\"\" />
									</a>
								</div>
							</div>
						</div>

";

print "
						
						<div class=\"top-header__wallet\">
							<div class=\"d-none auth_off\">
							<div class=\"top-header__wallet-bl\">
								<div class=\"top-header__wallet-m\"><span class=\"access_balance\">0.0000</span><span id=\"currency_network\" title=\"\">ETH</span></div>
                                    <a href=\"#\" data-fancybox class=\"top-header__wallet-id\" data-bs-toggle=\"modal\" data-bs-target=\"#accountModal\">
                                        <span class=\"wallet-id\">...</span>
                                        <span class=\"status\"></span>
                                    </a>
                                </div>
							</div>
                            <div class=\"auth_on\">
                                <a href=\"#\" class=\"top-header__wallet-link wallet_connect\" id=\"connectButton\">Connect Wallet</a>
                            </div>
						</div>

";
/*
						
						<div class=\"top-header__wallet\">
							<div class=\"top-header__wallet-bl\">
								<div class=\"top-header__wallet-m\">100.78</div>
								<a href=\"#\" data-fancybox class=\"top-header__wallet-id\" data-bs-toggle=\"modal\" data-bs-target=\"#accountModal\">
									<span class=\"wallet-id\">...</span>
									<span class=\"status\"></span>
								</a>
							</div>
						</div>
*/
print "
						
						<div class=\"menu-block\">
							<a href=\"#\" class=\"menu-block__btn\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
								<svg width=\"18\" height=\"4\" viewBox=\"0 0 18 4\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
									<path d=\"M0.868164 2.28915C0.868164 1.83082 1.02572 1.44768 1.34082 1.13974C1.66309 0.831797 2.08919 0.677826 2.61914 0.677826C3.14909 0.677826 3.57161 0.831797 3.88672 1.13974C4.20898 1.44768 4.37012 1.83082 4.37012 2.28915C4.37012 2.74749 4.20898 3.13063 3.88672 3.43857C3.57161 3.74651 3.14909 3.90048 2.61914 3.90048C2.08919 3.90048 1.66309 3.74651 1.34082 3.43857C1.02572 3.13063 0.868164 2.74749 0.868164 2.28915Z\" fill=\"#3D8AFF\"/>
									<path d=\"M7.24902 2.28915C7.24902 1.83082 7.40658 1.44768 7.72168 1.13974C8.04395 0.831797 8.47005 0.677826 9 0.677826C9.52995 0.677826 9.95247 0.831797 10.2676 1.13974C10.5898 1.44768 10.751 1.83082 10.751 2.28915C10.751 2.74749 10.5898 3.13063 10.2676 3.43857C9.95247 3.74651 9.52995 3.90048 9 3.90048C8.47005 3.90048 8.04395 3.74651 7.72168 3.43857C7.40658 3.13063 7.24902 2.74749 7.24902 2.28915Z\" fill=\"#3D8AFF\"/>
									<path d=\"M13.6299 2.28915C13.6299 1.83082 13.7874 1.44768 14.1025 1.13974C14.4248 0.831797 14.8509 0.677826 15.3809 0.677826C15.9108 0.677826 16.3333 0.831797 16.6484 1.13974C16.9707 1.44768 17.1318 1.83082 17.1318 2.28915C17.1318 2.74749 16.9707 3.13063 16.6484 3.43857C16.3333 3.74651 15.9108 3.90048 15.3809 3.90048C14.8509 3.90048 14.4248 3.74651 14.1025 3.43857C13.7874 3.13063 13.6299 2.74749 13.6299 2.28915Z\" fill=\"#3D8AFF\"/>
									</svg>
									
							</a>

							<div class=\"menu-block__links dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuButton1\">
<!--
								<a href=\"#\" class=\"menu-block__link menu-block__link_profile\">
									<span>View Profile 
									</span>
									<svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
										<path d=\"M13.6569 10.3431C12.7855 9.47181 11.7484 8.82678 10.6168 8.43631C11.8288 7.60159 12.625 6.20463 12.625 4.625C12.625 2.07478 10.5502 0 8 0C5.44978 0 3.375 2.07478 3.375 4.625C3.375 6.20463 4.17122 7.60159 5.38319 8.43631C4.25162 8.82678 3.2145 9.47181 2.34316 10.3431C0.832156 11.8542 0 13.8631 0 16H1.25C1.25 12.278 4.27803 9.25 8 9.25C11.722 9.25 14.75 12.278 14.75 16H16C16 13.8631 15.1678 11.8542 13.6569 10.3431ZM8 8C6.13903 8 4.625 6.486 4.625 4.625C4.625 2.764 6.13903 1.25 8 1.25C9.86097 1.25 11.375 2.764 11.375 4.625C11.375 6.486 9.86097 8 8 8Z\" fill=\"black\" fill-opacity=\"0.3\"/>
									</svg>	
								</a>
-->
<!--
								<a href=\"#\" class=\"menu-block__link menu-block__link_referral\" onclick=\"modal_ref_open();return false;\">
									<span>Referral
									</span>
									<svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
										<path d=\"M13.3346 10.0947V8C13.3346 7.82319 13.2644 7.65362 13.1394 7.52859C13.0144 7.40357 12.8448 7.33333 12.668 7.33333H8.66798V5.90533C9.29641 5.74307 9.8441 5.35718 10.2084 4.81999C10.5727 4.28281 10.7285 3.63121 10.6467 2.98733C10.5649 2.34346 10.2511 1.75151 9.76413 1.32245C9.27713 0.893392 8.65036 0.656677 8.00131 0.656677C7.35226 0.656677 6.72549 0.893392 6.23849 1.32245C5.75148 1.75151 5.43768 2.34346 5.3559 2.98733C5.27411 3.63121 5.42997 4.28281 5.79424 4.81999C6.15852 5.35718 6.7062 5.74307 7.33464 5.90533V7.33333H3.33464C3.15783 7.33333 2.98826 7.40357 2.86324 7.52859C2.73821 7.65362 2.66798 7.82319 2.66798 8V10.0947C2.03954 10.2569 1.49185 10.6428 1.12757 11.18C0.763299 11.7172 0.607446 12.3688 0.689229 13.0127C0.771012 13.6565 1.08482 14.2485 1.57182 14.6775C2.05882 15.1066 2.68559 15.3433 3.33464 15.3433C3.98369 15.3433 4.61046 15.1066 5.09746 14.6775C5.58447 14.2485 5.89827 13.6565 5.98005 13.0127C6.06184 12.3688 5.90598 11.7172 5.54171 11.18C5.17744 10.6428 4.62975 10.2569 4.00131 10.0947V8.66667H12.0013V10.0947C11.3729 10.2569 10.8252 10.6428 10.4609 11.18C10.0966 11.7172 9.94078 12.3688 10.0226 13.0127C10.1043 13.6565 10.4181 14.2485 10.9052 14.6775C11.3922 15.1066 12.0189 15.3433 12.668 15.3433C13.317 15.3433 13.9438 15.1066 14.4308 14.6775C14.9178 14.2485 15.2316 13.6565 15.3134 13.0127C15.3952 12.3688 15.2393 11.7172 14.875 11.18C14.5108 10.6428 13.9631 10.2569 13.3346 10.0947ZM4.66798 12.6667C4.66798 12.9304 4.58978 13.1882 4.44327 13.4074C4.29676 13.6267 4.08852 13.7976 3.84489 13.8985C3.60125 13.9994 3.33316 14.0258 3.07452 13.9744C2.81588 13.9229 2.5783 13.7959 2.39183 13.6095C2.20536 13.423 2.07838 13.1854 2.02693 12.9268C1.97548 12.6681 2.00189 12.4001 2.1028 12.1564C2.20372 11.9128 2.37462 11.7045 2.59388 11.558C2.81315 11.4115 3.07093 11.3333 3.33464 11.3333C3.68826 11.3333 4.0274 11.4738 4.27745 11.7239C4.5275 11.9739 4.66798 12.313 4.66798 12.6667ZM6.66798 3.33333C6.66798 3.06962 6.74617 2.81184 6.89268 2.59257C7.03919 2.37331 7.24743 2.20241 7.49106 2.10149C7.7347 2.00058 8.00279 1.97417 8.26143 2.02562C8.52007 2.07707 8.75765 2.20405 8.94412 2.39052C9.13059 2.57699 9.25758 2.81457 9.30902 3.07321C9.36047 3.33185 9.33407 3.59994 9.23315 3.84358C9.13223 4.08721 8.96133 4.29545 8.74207 4.44196C8.5228 4.58847 8.26502 4.66667 8.00131 4.66667C7.64769 4.66667 7.30855 4.52619 7.0585 4.27614C6.80845 4.02609 6.66798 3.68695 6.66798 3.33333ZM12.668 14C12.4043 14 12.1465 13.9218 11.9272 13.7753C11.7079 13.6288 11.5371 13.4205 11.4361 13.1769C11.3352 12.9333 11.3088 12.6652 11.3603 12.4065C11.4117 12.1479 11.5387 11.9103 11.7252 11.7239C11.9116 11.5374 12.1492 11.4104 12.4079 11.359C12.6665 11.3075 12.9346 11.3339 13.1782 11.4348C13.4219 11.5357 13.6301 11.7066 13.7766 11.9259C13.9231 12.1452 14.0013 12.403 14.0013 12.6667C14.0013 13.0203 13.8608 13.3594 13.6108 13.6095C13.3607 13.8595 13.0216 14 12.668 14Z\" fill=\"black\" fill-opacity=\"0.3\"/>
									</svg>
								</a>
-->
                                                                <a href=\"https://airdrop-hunter.site/\" class=\"menu-block__link menu-block__link_ab2\" target=_blank>
                                                                        <span>About</span>
                                                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                                <path d=\"M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346631 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6568C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7601 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9976 5.879 15.154 3.84557 13.6542 2.34579C12.1544 0.846025 10.121 0.00239972 8 0ZM8 14.9333C6.89867 14.9333 5.7456 13.5136 5.17333 11.2H10.8267C10.2544 13.5136 9.10133 14.9333 8 14.9333ZM4.9568 10.1333C4.74774 8.71879 4.74774 7.2812 4.9568 5.86666H11.0432C11.149 6.57283 11.2014 7.28596 11.2 8C11.2014 8.71404 11.149 9.42717 11.0432 10.1333H4.9568ZM1.06667 8C1.06706 7.27549 1.18152 6.55556 1.40587 5.86666H3.88587C3.68249 7.28161 3.68249 8.71838 3.88587 10.1333H1.40587C1.18152 9.44443 1.06706 8.7245 1.06667 8ZM8 1.06667C9.10133 1.06667 10.2544 2.4864 10.8267 4.8H5.17333C5.7456 2.4864 6.89867 1.06667 8 1.06667ZM12.1141 5.86666H14.5941C15.0463 7.25295 15.0463 8.74704 14.5941 10.1333H12.1141C12.2153 9.42671 12.2662 8.71382 12.2667 8C12.2662 7.28618 12.2153 6.57328 12.1141 5.86666ZM14.1445 4.8H11.9221C11.6848 3.64001 11.2194 2.53871 10.5531 1.56C12.0987 2.17643 13.3727 3.32574 14.1445 4.8ZM5.44693 1.56C4.78057 2.53871 4.31521 3.64001 4.07787 4.8H1.85547C2.62727 3.32574 3.90126 2.17643 5.44693 1.56ZM1.85547 11.2H4.07787C4.31521 12.36 4.78057 13.4613 5.44693 14.44C3.90126 13.8236 2.62727 12.6742 1.85547 11.2ZM10.5531 14.44C11.2194 13.4613 11.6848 12.36 11.9221 11.2H14.1445C13.3727 12.6742 12.0987 13.8236 10.5531 14.44Z\" fill=\"#A1A4AC\"/>
                                                                                </svg>
                                                                </a>

								<a href=\"#\" class=\"menu-block__link menu-block__link_darktheme\" onclick=\"change_theme();return false;\">
									<span>Theme</span>
									<svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
										<path d=\"M15.6218 9.1018C15.4582 9.06091 15.2946 9.1018 15.1515 9.20404C14.6199 9.65388 14.0064 10.0219 13.3317 10.2673C12.6978 10.5127 12.0026 10.6354 11.2665 10.6354C9.61025 10.6354 8.09715 9.96059 7.01344 8.87688C5.92973 7.79317 5.25497 6.28007 5.25497 4.62383C5.25497 3.92862 5.37765 3.25386 5.58213 2.64044C5.80705 1.98612 6.1342 1.39315 6.5636 0.881966C6.74762 0.657046 6.70673 0.329888 6.48181 0.145862C6.33868 0.0436251 6.1751 0.00273039 6.01152 0.0436251C4.2735 0.513914 2.76039 1.55673 1.67668 2.94715C0.633868 4.31712 0 6.01425 0 7.87496C0 10.1037 0.899683 12.128 2.37189 13.6002C3.8441 15.0724 5.86839 15.9721 8.09715 15.9721C9.97831 15.9721 11.7163 15.3178 13.1068 14.2341C14.5176 13.1299 15.54 11.5555 15.9694 9.75612C16.0716 9.44941 15.908 9.16314 15.6218 9.1018ZM12.4933 13.3753C11.3074 14.3159 9.79428 14.8884 8.13805 14.8884C6.19555 14.8884 4.43707 14.091 3.16934 12.8232C1.9016 11.5555 1.10416 9.79701 1.10416 7.85451C1.10416 6.23917 1.63579 4.76696 2.55592 3.58102C3.18979 2.76312 3.98723 2.08836 4.90736 1.61807C4.80513 1.84299 4.70289 2.06791 4.6211 2.31328C4.35529 3.04939 4.2326 3.82638 4.2326 4.64428C4.2326 6.58678 5.03005 8.3657 6.29778 9.63343C7.56552 10.9012 9.34444 11.6986 11.2869 11.6986C12.1457 11.6986 12.9636 11.5555 13.7202 11.2692C13.986 11.167 14.2518 11.0647 14.4972 10.9421C14.0064 11.8826 13.3317 12.721 12.4933 13.3753Z\" fill=\"black\" fill-opacity=\"0.3\"/>
										</svg>
										
								</a>
								<a href=\"https://twitter.com/AirHunter_Drop\" class=\"menu-block__link menu-block__link_twitter\" target=_blank>
									<span>Twitter</span>
									<svg width=\"16\" height=\"14\" viewBox=\"0 0 16 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
										<path d=\"M0.314433 12.0633C1.80595 13.0062 3.53524 13.5045 5.29977 13.5C7.90643 13.5 10.2951 12.4987 12.0264 10.6807C13.6831 8.94066 14.5944 6.60266 14.5491 4.22999C15.1771 3.69266 15.9158 2.66666 15.9158 1.66666C15.9158 1.57854 15.8926 1.49197 15.8484 1.41573C15.8042 1.33948 15.7407 1.27627 15.6642 1.23248C15.5877 1.1887 15.5011 1.1659 15.4129 1.1664C15.3248 1.1669 15.2384 1.19068 15.1624 1.23532C14.5724 1.58199 14.0344 1.67266 13.4811 1.51732C12.3511 0.415989 10.6691 0.183989 9.25177 0.947989C8.0131 1.61466 7.32443 2.83466 7.38643 4.16799C5.28597 3.91175 3.36317 2.8615 2.01243 1.23266C1.96114 1.1706 1.89562 1.12184 1.82144 1.09053C1.74727 1.05923 1.66663 1.0463 1.58638 1.05284C1.50613 1.05939 1.42866 1.08522 1.36053 1.12813C1.29241 1.17104 1.23566 1.22977 1.1951 1.29932C0.545766 2.41132 0.552433 3.69999 1.1171 4.74066C0.994789 4.761 0.883772 4.82437 0.80407 4.91935C0.724369 5.01434 0.68123 5.13467 0.682433 5.25866C0.684135 5.76475 0.794746 6.26456 1.00675 6.72411C1.21876 7.18367 1.52719 7.59221 1.9111 7.92199C1.84296 7.98739 1.79476 8.07077 1.77211 8.16246C1.74945 8.25415 1.75326 8.35038 1.7831 8.43999C1.94632 8.9269 2.21212 9.37311 2.56255 9.7485C2.91298 10.1239 3.33989 10.4197 3.81443 10.616C2.82817 11.0865 1.72939 11.27 0.643766 11.1453C0.1211 11.0747 -0.1369 11.7773 0.314433 12.0633ZM5.43643 10.7873C5.81043 10.5 5.61177 9.90132 5.14243 9.89132C4.7422 9.88284 4.34929 9.78234 3.99414 9.5976C3.63899 9.41286 3.33114 9.14884 3.09443 8.82599C3.32502 8.81199 3.55367 8.77537 3.7771 8.71666C4.28443 8.57932 4.26043 7.84732 3.7451 7.74399C3.29422 7.65374 2.87586 7.44402 2.53376 7.13676C2.19166 6.82949 1.9384 6.43597 1.80043 5.99732C2.05177 6.05932 2.30777 6.09399 2.5631 6.09866C3.0691 6.10132 3.26043 5.45266 2.84777 5.18132C1.91777 4.56866 1.5211 3.48666 1.78377 2.46932C3.42 4.12408 5.6174 5.10491 7.94177 5.21799C8.01892 5.22184 8.09591 5.20773 8.16668 5.17678C8.23746 5.14584 8.30009 5.09889 8.34965 5.03964C8.39921 4.98039 8.43434 4.91044 8.4523 4.83531C8.47025 4.76018 8.47052 4.68191 8.4531 4.60666C8.13643 3.23399 8.9031 2.27199 9.72643 1.82866C10.5411 1.38866 11.8491 1.25132 12.8518 2.30332C13.1498 2.61732 14.1551 2.62932 14.6664 2.50999C14.4371 2.94199 14.0844 3.35199 13.7544 3.58266C13.6852 3.63113 13.6294 3.69636 13.5922 3.77225C13.555 3.84815 13.5376 3.93224 13.5418 4.01666C13.6491 6.20666 12.8331 8.38399 11.3031 9.98999C9.76177 11.608 7.63043 12.4993 5.30043 12.4993C4.37377 12.4993 3.4651 12.3487 2.60643 12.058C3.6331 11.8593 4.60843 11.4247 5.43643 10.7873Z\" fill=\"black\" fill-opacity=\"0.3\"/>
										</svg>
                                                                </a>

                                                                <a href=\"https://t.me/airdrop_hunter_bot\" class=\"menu-block__link menu-block__link_tg\" target=_blank>
                                                                        <span>Telegram</span>
                                                                        <svg width=\"16\" height=\"14\" viewBox=\"0 0 16 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                                <path d=\"M15.6867 0.310887C15.5601 0.195016 15.4049 0.11494 15.2371 0.0788848C15.0693 0.0428299 14.8949 0.0520959 14.7319 0.105731L0.663476 4.74326C0.28007 4.86964 0.0200696 5.21189 0.00110086 5.61511C-0.0178366 6.01836 0.208882 6.38351 0.578695 6.54536L4.05791 8.06761L5.10763 12.9362C5.15123 13.1385 5.25388 13.3186 5.47135 13.374C5.69132 13.43 5.84673 13.3098 6.01085 13.1869L8.59273 11.2537L11.6111 13.7236C11.7869 13.8676 12.0018 13.9426 12.2209 13.9426C12.3271 13.9425 12.4325 13.925 12.533 13.8909C12.8507 13.7831 13.0862 13.5239 13.1629 13.1973L15.9744 1.24414C16.0136 1.07705 16.0076 0.902531 15.957 0.738519C15.9065 0.574506 15.8132 0.426909 15.6867 0.310887ZM6.23576 8.93989C6.23404 8.94395 6.23235 8.94854 6.23076 8.95404L5.64876 10.9874L4.99926 7.97507L9.46541 5.49367L6.34288 8.75861C6.29391 8.81015 6.25729 8.87213 6.23576 8.93989ZM6.42048 11.7063L6.68482 10.7827L6.93766 9.89929L7.84363 10.6407L6.42048 11.7063ZM15.0596 1.02895L12.2482 12.9821C12.2468 12.9881 12.2449 12.9963 12.2312 13.0009C12.2176 13.0055 12.2109 13.0003 12.2063 12.9964L8.90341 10.2936L8.90316 10.2934L7.37288 9.04117L12.2892 3.90061C12.3669 3.81936 12.4129 3.71294 12.4188 3.60068C12.4248 3.48842 12.3903 3.37775 12.3216 3.28876C12.2529 3.19976 12.1545 3.13835 12.0444 3.11567C11.9343 3.093 11.8197 3.11056 11.7214 3.16517L4.44173 7.20982L0.955382 5.68442C0.944757 5.67979 0.938913 5.6772 0.939757 5.65923C0.940601 5.64132 0.946663 5.63929 0.957663 5.63567L15.026 0.998169C15.0329 0.99595 15.0405 0.993387 15.0519 1.0037C15.0632 1.01407 15.0613 1.02195 15.0596 1.02895Z\" fill=\"#A1A4AC\"/>
                                                                                </svg>
                                                                </a>
<!--
                                                                <a href=\"#\" class=\"menu-block__link\" onclick=\"support_click();return false;\">
                                                                        <span>Support</span>(alt+s)
                                                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                                <path d=\"M0.616598 13.9792C0.50915 14.3782 0.618884 14.7908 0.911508 15.0834C1.05274 15.2263 1.22945 15.329 1.4235 15.3811C1.61754 15.4331 1.82194 15.4326 2.0157 15.3795L3.90861 14.8725C5.14146 15.6039 6.54902 15.9886 7.98248 15.9859C10.0577 15.9859 12.1221 15.1897 13.6584 13.654C14.4536 12.8584 15.0722 11.9041 15.474 10.8534C15.8758 9.80265 16.0517 8.67906 15.9902 7.55582C15.865 5.28855 14.7683 3.16703 12.9799 1.73535C10.0651 -0.598209 5.84896 -0.575919 2.9553 1.78793C-0.133822 4.31352 -0.898529 8.69945 1.12355 12.0875L0.616598 13.9792ZM3.67829 2.67323C6.15644 0.647727 9.76794 0.628295 12.265 2.62751C13.8224 3.87459 14.7397 5.6469 14.8483 7.61926C14.9007 8.58186 14.7499 9.54472 14.4055 10.4451C14.0612 11.3456 13.531 12.1634 12.8496 12.8453C10.5887 15.1057 6.99602 15.4972 4.30697 13.7758C4.24005 13.7329 4.16493 13.7045 4.0864 13.6923C4.00787 13.6801 3.92766 13.6844 3.85089 13.7049L1.71908 14.2759L2.29061 12.1452C2.31116 12.0684 2.31547 11.9882 2.30326 11.9097C2.29106 11.8312 2.26261 11.756 2.21974 11.6891C0.34455 8.76174 0.971519 4.8862 3.67829 2.67323Z\" fill=\"#A1A4AC\"/>
                                                                                <path d=\"M5.99008 6.57793C6.14166 6.57793 6.28703 6.51771 6.39421 6.41053C6.50139 6.30335 6.56161 6.15798 6.56161 6.0064C6.56161 5.56632 6.7605 5.15482 7.10742 4.8782C7.45834 4.59815 7.89956 4.50213 8.34993 4.60558C8.60565 4.6676 8.83934 4.79888 9.02535 4.98499C9.21137 5.17111 9.34251 5.40487 9.4044 5.66062C9.54328 6.26416 9.30495 6.87227 8.79686 7.20947C7.94185 7.77643 7.43148 8.75889 7.43148 9.83851C7.43148 9.99009 7.49169 10.1355 7.59887 10.2426C7.70606 10.3498 7.85143 10.41 8.00301 10.41C8.15459 10.41 8.29996 10.3498 8.40714 10.2426C8.51432 10.1355 8.57454 9.99009 8.57454 9.83851C8.57454 9.14353 8.89402 8.51656 9.42898 8.16221C10.3377 7.55925 10.7652 6.4762 10.5183 5.40458C10.4096 4.93924 10.173 4.51356 9.83516 4.17555C9.49736 3.83755 9.07181 3.60067 8.60654 3.49166C8.22474 3.40116 7.82739 3.39842 7.44438 3.48365C7.06137 3.56888 6.70268 3.73987 6.39529 3.98375C6.08992 4.22506 5.84329 4.53253 5.674 4.88299C5.50471 5.23345 5.41717 5.61776 5.41797 6.00697C5.41797 6.15855 5.47819 6.30392 5.58537 6.4111C5.69255 6.51829 5.83793 6.5785 5.9895 6.5785L5.99008 6.57793ZM8.01444 11.4234H8.00872C7.69324 11.4234 7.44005 11.6794 7.44005 11.9949C7.44005 12.3104 7.69895 12.5664 8.01444 12.5664C8.16602 12.5664 8.31139 12.5062 8.41857 12.399C8.52575 12.2918 8.58597 12.1465 8.58597 11.9949C8.58597 11.8433 8.52575 11.6979 8.41857 11.5908C8.31139 11.4836 8.16602 11.4234 8.01444 11.4234Z\" fill=\"#A1A4AC\"/>
                                                                        </svg>
                                                                </a>
                                                                <a href=\"/changelog\" class=\"menu-block__link\">
                                                                        <span>ChangeLog</span>
                                                                        <svg width=\"16\" height=\"16\" viewBox=\"0 0 16 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                                                                <path d=\"M0.616598 13.9792C0.50915 14.3782 0.618884 14.7908 0.911508 15.0834C1.05274 15.2263 1.22945 15.329 1.4235 15.3811C1.61754 15.4331 1.82194 15.4326 2.0157 15.3795L3.90861 14.8725C5.14146 15.6039 6.54902 15.9886 7.98248 15.9859C10.0577 15.9859 12.1221 15.1897 13.6584 13.654C14.4536 12.8584 15.0722 11.9041 15.474 10.8534C15.8758 9.80265 16.0517 8.67906 15.9902 7.55582C15.865 5.28855 14.7683 3.16703 12.9799 1.73535C10.0651 -0.598209 5.84896 -0.575919 2.9553 1.78793C-0.133822 4.31352 -0.898529 8.69945 1.12355 12.0875L0.616598 13.9792ZM3.67829 2.67323C6.15644 0.647727 9.76794 0.628295 12.265 2.62751C13.8224 3.87459 14.7397 5.6469 14.8483 7.61926C14.9007 8.58186 14.7499 9.54472 14.4055 10.4451C14.0612 11.3456 13.531 12.1634 12.8496 12.8453C10.5887 15.1057 6.99602 15.4972 4.30697 13.7758C4.24005 13.7329 4.16493 13.7045 4.0864 13.6923C4.00787 13.6801 3.92766 13.6844 3.85089 13.7049L1.71908 14.2759L2.29061 12.1452C2.31116 12.0684 2.31547 11.9882 2.30326 11.9097C2.29106 11.8312 2.26261 11.756 2.21974 11.6891C0.34455 8.76174 0.971519 4.8862 3.67829 2.67323Z\" fill=\"#A1A4AC\"/>
                                                                                <path d=\"M5.99008 6.57793C6.14166 6.57793 6.28703 6.51771 6.39421 6.41053C6.50139 6.30335 6.56161 6.15798 6.56161 6.0064C6.56161 5.56632 6.7605 5.15482 7.10742 4.8782C7.45834 4.59815 7.89956 4.50213 8.34993 4.60558C8.60565 4.6676 8.83934 4.79888 9.02535 4.98499C9.21137 5.17111 9.34251 5.40487 9.4044 5.66062C9.54328 6.26416 9.30495 6.87227 8.79686 7.20947C7.94185 7.77643 7.43148 8.75889 7.43148 9.83851C7.43148 9.99009 7.49169 10.1355 7.59887 10.2426C7.70606 10.3498 7.85143 10.41 8.00301 10.41C8.15459 10.41 8.29996 10.3498 8.40714 10.2426C8.51432 10.1355 8.57454 9.99009 8.57454 9.83851C8.57454 9.14353 8.89402 8.51656 9.42898 8.16221C10.3377 7.55925 10.7652 6.4762 10.5183 5.40458C10.4096 4.93924 10.173 4.51356 9.83516 4.17555C9.49736 3.83755 9.07181 3.60067 8.60654 3.49166C8.22474 3.40116 7.82739 3.39842 7.44438 3.48365C7.06137 3.56888 6.70268 3.73987 6.39529 3.98375C6.08992 4.22506 5.84329 4.53253 5.674 4.88299C5.50471 5.23345 5.41717 5.61776 5.41797 6.00697C5.41797 6.15855 5.47819 6.30392 5.58537 6.4111C5.69255 6.51829 5.83793 6.5785 5.9895 6.5785L5.99008 6.57793ZM8.01444 11.4234H8.00872C7.69324 11.4234 7.44005 11.6794 7.44005 11.9949C7.44005 12.3104 7.69895 12.5664 8.01444 12.5664C8.16602 12.5664 8.31139 12.5062 8.41857 12.399C8.52575 12.2918 8.58597 12.1465 8.58597 11.9949C8.58597 11.8433 8.52575 11.6979 8.41857 11.5908C8.31139 11.4836 8.16602 11.4234 8.01444 11.4234Z\" fill=\"#A1A4AC\"/>
                                                                        </svg>
                                                                </a>

-->
								
							</div>
						</div>
<!--
						<div class=\"languages\">
							<a href=\"#\" class=\"languages__active\" id=\"dropdownLanguages\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
								<span class=\"languages__btn d-flex align-items-center\">
									<img src=\"/images/flags/en.png\" alt=\"\" />
									<span>Eng</span>
								</span>
								<svg width=\"11\" height=\"7\" viewBox=\"0 0 11 7\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
									<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0.982895 0.640364C1.30774 0.315516 1.83443 0.315517 2.15928 0.640366L5.69226 4.17336L9.22526 0.640365C9.55011 0.315516 10.0768 0.315516 10.4016 0.640365C10.7265 0.965213 10.7265 1.4919 10.4016 1.81675L6.28045 5.93793C6.12445 6.09393 5.91287 6.18157 5.69226 6.18157C5.47164 6.18157 5.26007 6.09393 5.10407 5.93793L0.982893 1.81674C0.658045 1.4919 0.658046 0.965212 0.982895 0.640364Z\" fill=\"black\"/>
									</svg>						
							</a>
							<div class=\"languages__links dropdown-menu\" aria-labelledby=\"dropdownLanguages\">
								
								<div class=\"languages-link\">
									<a href=\"#\" class=\"languages__link\">
										<span class=\"long\">English</span>
										<img src=\"/images/flags/en.png\" alt=\"\" />
										<span class=\"short\">Eng</span>
									</a>
									
								</div>
								<div class=\"languages-link\">
									<a href=\"#\" class=\"languages__link\">
										<span class=\"long\">Russian</span>
										<img src=\"/images/flags/ru.png\" alt=\"\" />
										<span class=\"short\">Ru</span>
									</a>
									
								</div>
								
							</div>
						</div>
-->
					</div>
				</div>
			</div>
			
		 </div>

		 
		 
	</header>
";