<?php

if ($page == "home") {
    display_home();
}
elseif ($page == "main") {
    display_main();
}
elseif ($page == "propos") {
    display_apropos();
}
elseif (($page == "connection_success")) {
    display_signin_success();
}
elseif (($page == "connection_failed")) {
    display_signin_failed();
}
elseif (($page == "sub_failed")) {
    display_signup_failed();
}
elseif (($page == "user_sub")) {
    display_user_sub();
}
elseif (($page == "offer-selection")) {
    display_offer_selection($type_list, $offer_list);
}
elseif (($page == "account-verification")) {
    display_account_verification();
}
elseif (($page == "payement")) {
    display_payement();
}