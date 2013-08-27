@charset "UTF-8";

/*==============================================================================
 * デフォルトスタイルシートの上書き
 *----------------------------------------------------------------------------*/
body, div, p, pre, blockquote, th, td,
dl, dt, dd, ul, ol, li,
h1, h2, h3, h4, h5, h6,
iframe, object, embed {
	margin: 0;
	padding: 0;
	border: none;
	text-align: left;
}
ul, ol {
	list-style-position: outside;
	list-style-type: none;
}
table {
	border-collapse: separate;
	border-spacing: 0;
	empty-cells: show;
	margin: 0;
	font-size: 1em;
}
* {
	word-break: break-all;
}
*:first-child+html table {
	border-collapse: collapse;
}
* html table {
	border-collapse: collapse;
}
th, td {
	vertical-align: middle;
}
address, cite, caption, th, del, ins,
abbr, acronym, dfn, em, strong,
code, kbd, samp, var {
	border: none;
	font-style: normal;
	font-variant: normal;
	font-weight: normal;
	text-align: left;
	text-decoration: none;
}
img {
	border: none;
	vertical-align: baseline;
}
a img {
	vertical-align: text-bottom;
}
* html a img {
	vertical-align: baseline;
}
br {
	letter-spacing: 0;
}
h1, h2, h3, h4, h5, h6 {
	font-size: 100%;
	font-weight: normal;
}
q:before, q:after {
	content: "";
}
form, fieldset, input, textarea {
	margin: 0;
}
form, fieldset {
	padding: 0;
}
fieldset {
	border: none;
}
form p {
	margin: 0;
	padding: 0;
}

/*==============================================================================
 * OpenPNE全共通指定
 *----------------------------------------------------------------------------*/
body {
	font: normal normal normal 10pt/1.2 "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "ＭＳ Ｐゴシック", "MS PGothic", Osaka, sans-serif;
}
input,
textarea,
select {
	color: #333333;
	font-size: inherit;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "ＭＳ Ｐゴシック", "MS PGothic", Osaka, sans-serif;
}
a:link {
	color: #026cd1;
}
a:visited {
	color: #004a95;
}
a:hover, a:active {
	color: #76afe6;
}
.input_text,
.input_password,
textarea {
	background-color: #f8f8f8;
}
.input_text,
.input_password,
textarea,
select {
	border: 1px solid #888888;
}
.input_image {
	border: none;
}
strong {
	font-weight: bold;
}
/*----------------------------------------------
 * テーブル
 *--------------------------------------------*/
div.parts table {
	table-layout: fixed;
	width: 100%;
}
div.parts th,
div.parts td {
	border-width: 1px 0 0 1px;
	border-style: solid;
	border-color: #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
div.parts tr th:first-child,
div.parts tr td:first-child,
div.parts tr th.first-child,
div.parts tr td.first-child {
	border-left-width: 0;
}
/*----------------------------------------------
 * マーカー付きリンク、ボタンリンク
 *--------------------------------------------*/
ul.moreInfo li {
	padding: 2px 0 2px 20px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('icon_arrow_1_image')) ?>) no-repeat 0 0.4em;
}
ul.moreInfo.button li {
	padding: 0;
	background: none;
}
ul.moreInfo.button li form {
	display: inline;
}
ul.moreInfo.button li form .input_submit {
	margin: 0 5px;
}
/*----------------------------------------------
 * サブミットボタン
 *--------------------------------------------*/
.input_submit {
	border: 1px solid #888888;
	background: #dadce6 url(<?php echo image_path(opSkinClassicConfig::get('bg_button_image')) ?>) repeat-x scroll 50% 0;
	letter-spacing: 0;
}
.input_file {
	background: none;
}
/*----------------------------------------------
 * ラジオボタン、セレクトボタン
 *--------------------------------------------*/
.input_checkbox,
.input_radio {
	width: 16px;
}
ul.check {
	line-height: 1.4;
}
ul.check .input_radio,
ul.check .input_checkbox {
	margin: 0 4px;
}
/*----------------------------------------------
 * 画像置換指定
 *--------------------------------------------*/
#HeaderContainer a,
#localNav a {
	display: block;
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	border: none;
	text-indent: -9999px;
	text-decoration: none;
}
#HeaderContainer a:focus,
#localNav a:focus {
	overflow: hidden;
}
/*----------------------------------------------
 * clearfix, overflow: hidden
 *--------------------------------------------*/
div#LayoutA,
div#LayoutB,
div#LayoutC,
div.pagerRelativeMulti,
.diaryDetailBox .partsHeading,
.diaryDetailBox dl,
.topicDetailBox dl,
.eventDetailBox dl,
.messageDetailBox div.operation,
.prevNextLinkLine,
.commentList dl,
#pc_page_fh_diary_list .commentList dd div.title,
.reviewList dl,
.recentList dl,
.searchCategoryList dl dd ul,
.bizSideScheduleList dl,
.albumImageList .partsHeading,
.homeMainTable .partsHeading,
.formTable .partsHeading,
.formTable div.checkList ul,
.monthlyCalendarTable div.block {
	zoom: 1;
	overflow: visible;
}
div#LayoutA:after,
div#LayoutB:after,
div#LayoutC:after,
div.pagerRelativeMulti:after,
.diaryDetailBox .partsHeading:after,
.diaryDetailBox dl:after,
.topicDetailBox dl:after,
.eventDetailBox dl:after,
.messageDetailBox div.operation:after,
.prevNextLinkLine:after,
.commentList dl:after,
#pc_page_fh_diary_list .commentList dd div.title:after,
.reviewList dl:after,
.recentList dl:after,
.searchCategoryList dl dd ul:after,
.bizSideScheduleList dl:after,
.albumImageList .partsHeading:after,
.homeMainTable .partsHeading:after,
.formTable .partsHeading:after,
.formTable div.checkList ul:after,
.monthlyCalendarTable div.block:after {
	content: ".";
	display: block;
	clear: both;
	height: 0;
	visibility: hidden;
}
#Top {
	overflow: hidden;
}
dd div, dt, ul, ol, td, th, p,
h1, h2, h3, h4, h5, h6, .partsHeading,
fieldset, label {
	overflow: hidden;
}
dd div div {
	overflow: visible;
}
pre {
	overflow: auto;
}
/*----------------------------------------------
 * ベースレイアウト
 *--------------------------------------------*/
#Container {
	position: relative;
	width: 720px;
}
#Header {
	position: relative;
}
#topBanner {
	position: absolute;
	top: 5px;
	left: 247px;
	width: 468px;
	height: 60px;
}
#Top {
	padding-left: 5px;
}
#Top .infoBox,
#Top .descriptionBox {
	margin-right: 20px;
	margin-left: 20px;
}
#LayoutA #Left {
	float: left;
	width: 270px;
	padding: 0 5px;
}
#LayoutA #Center {
	float: right;
	width: 440px;
}
#LayoutB #Left {
	float: left;
	width: 170px;
  margin: 5px;
}
#LayoutB #Center {
	float: right;
	width: 540px;
}
#LayoutC #Center {
	width: 650px;
	margin: 0 auto;
}
#Footer {
	width: 720px;
	height: 21px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('skin_footer_image')) ?>) 0 0 no-repeat;
}
#Footer p {
	padding-right: 12px;
	line-height: 21px;
	text-align: right;
}
#sideBanner {
	position: absolute;
	top: 0px;
	left: 720px;
	width: 230px;
}
*:first-child+html #pc_page_h_diary_add #Footer,
*:first-child+html #pc_page_h_diary_edit #Footer {
	margin-top: 10px;
}
* html #pc_page_h_diary_add #Footer,
* html #pc_page_h_diary_edit #Footer {
	margin-top: 10px;
}
/*----------------------------------------------
 * パーツ枠
 *--------------------------------------------*/
div.dparts,
div.dparts div.parts,
div.ditem,
#LayoutA #Left div.parts {
	border: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
div.ditem div.item {
	border-width: 0 1px 1px;
	border-style: solid;
	border-color: #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
div.dparts {
	margin: 0 auto 10px;
	padding: 7px;
}
div.dparts div.parts {
	margin: 0;
}
div.parts {
	zoom: 1;
	margin: 0 auto 10px;
}
div.ditem {
	padding: 5px 6px;
}
/*----------------------------------------------
 * パーツ見出し
 *--------------------------------------------*/
.partsHeading {
	padding: 2px 8px 2px 36px;
	background: #<?php echo opSkinClassicConfig::get('header_background_color') ?> url(<?php echo image_path(opSkinClassicConfig::get('content_header_1_image')) ?>) no-repeat 0 0;
	text-align: left;
	font-size: 100%;
}
#LayoutA #Left .partsHeading {
	padding-left: 24px;
	background-image: url(<?php echo image_path(opSkinClassicConfig::get('icon_title_1_image')) ?>);
}
.partsHeading h3 {
	display: inline;
	font-weight: bold;
}
.partsHeading p {
	display: inline;
	margin-left: 0.5em;
}
/*----------------------------------------------
 * パーツ内上下の部分（1件～20件を表示など）
 *--------------------------------------------*/
div.block,
div.partsInfo,
div.pagerAbsolute,
div.pagerRelative,
div.pagerRelativeMulti,
div.operation {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
div.partsInfo {
	padding: 10px 40px;
}
div.pagerAbsolute {
	padding: 4px;
	text-align: center;
}
div.pagerAbsolute p {
	display: inline;
}
div.pagerRelative {
	padding: 4px;
	text-align: right;
}
div.pagerRelativeMulti {
	padding: 4px;
}
div.pagerRelative p,
div.pagerRelativeMulti div.pager p {
	display: inline;
	margin-left: 10px;
}
div.pagerRelative p:first-child,
div.pagerRelativeMulti div.pager p:first-child,
div.pagerRelative p.first-child,
div.pagerRelativeMulti div.pager p.first-child {
	margin-left: 0;
}
div.pagerRelativeMulti div.text {
	float: left;
	width: 55%;
}
div.pagerRelativeMulti div.pager {
	float: right;
	width: 45%;
	margin-top: 0.5em;
	text-align: right;
}
div.operation {
	padding: 4px;
}
div.operation ul.moreInfo {
	text-align: center;
}
div.operation ul.moreInfo li {
	display: inline;
	background-position: 0 50%;
}
/*----------------------------------------------
 * カレンダー
 *--------------------------------------------*/
.sideNav .calendar td,
.sideNav .calendar td * {
	word-break: normal;
	letter-spacing: -1px;
}
#Body .calendar .holiday,
.calendar .sun {
	color: #d92c49;
}
.calendar .sat {
	color: #2c65d9;
}

/*==============================================================================
 * h系、f系、c系ナビメニュー（localNav）
 *----------------------------------------------------------------------------*/
body.secure_page #HeaderContainer {
	zoom: 1;
	position: relative;
	width: 720px;
	height: 96px;
	background: url(<?php echo image_path(image_path(opSkinClassicConfig::get('skin_after_header_image'))) ?>) 0 0 no-repeat;
}
body.insecure_page #HeaderContainer {
	height: 125px;
	margin-bottom: 10px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('skin_before_header_image')) ?>) 0 0 no-repeat;
}
#localNav {
	zoom: 1;
	position: relative;
	width: 720px;
	height: 29px;
  margin-bottom: 10px;
}
#localNav .default {
	zoom: 1;
	width: 720px;
	height: 29px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('skin_navi_h_image')) ?>) 0 0 no-repeat;
}
#localNav .friend {
	zoom: 1;
	width: 720px;
	height: 29px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('skin_navi_f_image')) ?>) 0 0 no-repeat;
}
#localNav .community {
	zoom: 1;
	width: 720px;
	height: 29px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('skin_navi_c_image')) ?>) 0 0 no-repeat;
}
#HeaderContainer li a:hover, #HeaderContainer li a:active {
	background-image: url(<?php echo image_path(opSkinClassicConfig::get('skin_after_header_2_image')) ?>);
}
#localNav .default li a:hover, #localNav .default li a:active {
	background-image: url(<?php echo image_path(opSkinClassicConfig::get('skin_navi_h_2_image')) ?>);
}
#localNav .friend li a:hover, #localNav .friend li a:active {
	background-image: url(<?php echo image_path(opSkinClassicConfig::get('skin_navi_f_2_image')) ?>);
}
#localNav .community li a:hover, #localNav .community li a:active {
	background-image: url(<?php echo image_path(opSkinClassicConfig::get('skin_navi_c_2_image')) ?>);
}
body.insecure_page #localNav {
  display: none;
}

#HeaderContainer h1 {
	position: absolute;
	top: 5px;
	left: 0;
	width: 240px;
	height: 60px;
}
#HeaderContainer li, #localNav li {
	position: absolute;
}

li#globalNav_member_search,
li#globalNav_community_search,
li#globalNav_3 {
	top: 70px;
	height: 18px;
}
li#globalNav__homepage,
li#globalNav_member_invite,
li#globalNav_diary_index,
li#globalNav_7,
li#globalNav_member_config,
li#globalNav_member_logout {
	top: 68px;
	height: 20px;
}
li#globalNav_member_search { left:   2px; width: 88px; }
li#globalNav_community_search { left:  90px; width: 90px; }
li#globalNav_3 { left: 180px; width: 88px; }
li#globalNav__homepage { left: 290px; width: 70px; }
li#globalNav_member_invite { left: 360px; width: 72px; }
li#globalNav_diary_index { left: 432px; width: 72px; }
li#globalNav_7 { left: 504px; width: 72px; }
li#globalNav_member_config { left: 576px; width: 72px; }
li#globalNav_member_logout { left: 648px; width: 70px; }
li#globalNav_member_search a:hover, li#globalNav_member_search a:active { background-position:   -2px -70px; }
li#globalNav_community_search a:hover, li#globalNav_community_search a:active { background-position:  -90px -70px; }
li#globalNav_3 a:hover, li#globalNav_3 a:active { background-position: -180px -70px; }
li#globalNav__homepage a:hover, li#globalNav__homepage a:active { background-position: -290px -68px; }
li#globalNav_member_invite a:hover, li#globalNav_member_invite a:active { background-position: -360px -68px; }
li#globalNav_diary_index a:hover, li#globalNav_diary_index a:active { background-position: -432px -68px; }
li#globalNav_7 a:hover, li#globalNav_7 a:active { background-position: -504px -68px; }
li#globalNav_member_config a:hover, li#globalNav_member_config a:active { background-position: -576px -68px; }
li#globalNav_member_logout a:hover, li#globalNav_member_logout a:active { background-position: -648px -68px; }

#localNav .default li {
	top: 0;
	width: 80px;
	height: 29px;
	left: -9999px;
}
#localNav .default li#default__homepage { left:   0px; }
#localNav .default li#default_friend_list { left:  80px; }
#localNav .default li#default_diary_listMember { left: 160px; }
#localNav .default li#default_message_index { left: 240px; }
#localNav .default li#default_ashiato_list { left: 320px; }
#localNav .default #hLocalNav_6 { left: 400px; }
#localNav .default #hLocalNav_7 { left: 480px; }
#localNav .default li#default_member_profile { left: 560px; }
#localNav .default li#default_member_editProfile { left: 640px; }
#localNav .default li#default__homepage a:hover, #localNav .default li#default__homepage a:active { background-position:   -0px -29px; }
#localNav .default li#default_friend_list a:hover, #localNav .default li#default_friend_list a:active { background-position:  -80px -29px; }
#localNav .default li#default_diary_listMember a:hover, #localNav .default li#default_diary_listMember a:active { background-position: -160px -29px; }
#localNav .default li#default_message_index a:hover, #localNav .default li#default_message_index a:active { background-position: -240px -29px; }
#localNav .default li#default_ashiato_list a:hover, #localNav .default li#default_ashiato_list a:active { background-position: -320px -29px; }
#localNav .default #hLocalNav_6 a:hover, #localNav .default #hLocalNav_6 a:active { background-position: -400px -29px; }
#localNav .default #hLocalNav_7 a:hover, #localNav .default #hLocalNav_7 a:active { background-position: -480px -29px; }
#localNav .default li#default_member_profile a:hover, #localNav .default li#default_member_profile a:active { background-position: -560px -29px; }
#localNav .default li#default_member_editProfile a:hover, #localNav .default li#default_member_editProfile a:active { background-position: -640px -29px; }

#localNav .friend li {
	top: 0;
	width: 80px;
	height: 29px;
	left: -9999px;
}
#localNav .friend li#friend_member_profile { left:   0px; }
#localNav .friend li#friend_friend_list { left:  80px; }
#localNav .friend li#friend_diary_listMember { left: 160px; }
#localNav .friend li#friend_message_sendToFriend { left: 240px; }
#fLocalNav_5 { left: 320px; }
#fLocalNav_6 { left: 400px; }
#fLocalNav_7 { left: 480px; }
#fLocalNav_8 { left: 560px; }
#fLocalNav_9 { left: 640px; }
#localNav .friend li#friend_member_profile a:hover, #localNav .friend li#friend_member_profile a:active { background-position:   -0px -29px; }
#localNav .friend li#friend_friend_list a:hover, #localNav .friend li#friend_friend_list a:active { background-position:  -80px -29px; }
#localNav .friend li#friend_diary_listMember a:hover, #localNav .friend li#friend_diary_listMember a:active { background-position: -160px -29px; }
#localNav .friend li#friend_message_sendToFriend a:hover, #localNav .friend li#friend_message_sendToFriend a:active { background-position: -240px -29px; }
#fLocalNav_5 a:hover, li#fLocalNav_5 a:active { background-position: -320px -29px; }
#fLocalNav_6 a:hover, li#fLocalNav_6 a:active { background-position: -400px -29px; }
#fLocalNav_7 a:hover, li#fLocalNav_7 a:active { background-position: -480px -29px; }
#fLocalNav_8 a:hover, li#fLocalNav_8 a:active { background-position: -560px -29px; }
#fLocalNav_9 a:hover, li#fLocalNav_9 a:active { background-position: -640px -29px; }

#localNav .community li {
	top: 0;
	width: 120px;
	height: 29px;
	left: -9999px;
}
#localNav .community li#community_community_home { left:   0px; }
#localNav .community li#community_communityTopic_listCommunity { left: 120px; }
#localNav .community li#cLocalNav_3 { left: 240px; }
#localNav .community li#community_community_join { left: 360px; }
#localNav .community li#cLocalNav_5 { left: 480px; }
#localNav .community li#community_community_quit { left: 600px; }
#localNav .community li#community_community_home a:hover, #localNav .community li#community_community_home a:active { background-position:   -0px -29px; }
#localNav .community li#community_communityTopic_listCommunity a:hover, #localNav .community li#community_communityTopic_listCommunity a:active { background-position: -120px -29px; }
#localNav .community li#cLocalNav_3 a:hover, #localNav .community li#cLocalNav_3 a:active { background-position: -240px -29px; }
#localNav .community li#community_community_join a:hover, #localNav .community li#community_community_join a:active { background-position: -360px -29px; }
#localNav .community li#cLocalNav_5 a:hover, #localNav .community li#cLocalNav_5 a:active { background-position: -480px -29px; }
#localNav .community li#community_community_quit a:hover, #localNav .community li#community_community_quit a:active { background-position: -600px -29px; }

/*==============================================================================
 * memberImageBox
 *----------------------------------------------------------------------------*/
.memberImageBox * {
  text-align: center;
}

.memberImageBox {
  padding: 7px;
  border: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
  background: transparent url(<?php echo image_path(opSkinClassicConfig::get('bg_parts_photo_box_image')) ?>) repeat-x 0 0;
}

.memberImageBox p.photo {
  padding: 7px;
  border: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
  background-color: #<?php echo opSkinClassicConfig::get('box_background_color') ?>;
}

.memberImageBox p.friendLink {
  margin-bottom: 3px;
}

.memberImageBox ul.moreInfo {
  margin: 2px 0 -5px;
}

.memberImageBox ul.moreInfo li {
  padding: 1px 0;
  background: none;
}

.memberImageBox ul.moreInfo li img {
  vertical-align: bottom;
}

.memberImageBox p.rank {
  margin-top: 6px;
}

.memberImageBox p.point {
  margin-top: 2px;
}

.memberImageBox p.text {
  margin-top: 4px;
}

.memberImageBox p.loginTime {
  margin-top: 0px;
}

/*==============================================================================
 * 1. box（シンプルボックス）
 *----------------------------------------------------------------------------*/
.box .body {
	padding: 10px 0;
}
.box .body p {
	text-align: center;
}

/*==============================================================================
 * 2. descriptionBox（説明ボックス）
 *----------------------------------------------------------------------------*/
.descriptionBox p {
	margin: 12px;
}

/*==============================================================================
 * 3. alertBox（アラートボックス）
 *----------------------------------------------------------------------------*/
.alertBox {
	width: 564px;
}
#Body .alertBox th {
	width: 148px;
	padding: 8px 0;
	border: none;
	text-align: center;
}
#Body .alertBox td {
	padding: 6px;
	border-width: 0 0 0 1px;
	color: #ff0000;
}

/*==============================================================================
 * 4. infoBox（案内ボックス）
 *----------------------------------------------------------------------------*/
.parts .infoBox {
	zoom: 1;
	position: relative;
}
.infoBox p {
	margin-right: 16em;
	padding: 5px;
	border-right: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
.infoBox ul.moreInfo {
	position: absolute;
	bottom: 3px;
	right: 0;
	width: 15.5em;
}

/*==============================================================================
 * 5. infoButtonBox（ボタン付き案内ボックス）
 *----------------------------------------------------------------------------*/
.infoButtonBox .block {
	padding: 30px 10px;
}
.infoButtonBox p,
.infoButtonBox ul {
	margin-top: 6px;
	text-align: center;
}
.infoButtonBox ul.check li {
	text-align: center;
}
.infoButtonBox ul.check li .input_submit {
	margin-top: 6px;
}
.infoButtonBox ul.moreInfo {
	margin-left: 230px;
}
.infoButtonBox ul.moreInfo.button {
	margin-left: 0;
}
.infoButtonBox ul.moreInfo.button li {
	text-align: center;
}

/*==============================================================================
 * 6. yesNoButtonBox（はい、いいえボタン付きボックス）
 *----------------------------------------------------------------------------*/
.yesNoButtonBox .block {
	padding: 10px 0;
}
.yesNoButtonBox .block p,
.yesNoButtonBox ul.moreInfo.button {
	text-align: center;
}
.yesNoButtonBox ul.moreInfo.button {
	margin-top: 4px;
}
.yesNoButtonBox ul.moreInfo.button li {
	display: inline;
}

/*==============================================================================
 * 7. searchFormBox（検索フォームボックス）
 *----------------------------------------------------------------------------*/
.searchFormBox .partsHeading {
	border-bottom: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.searchFormBox .parts {
	zoom: 1;
}
.searchFormBox .item {
	margin: 10px 40px;
	padding-top: 8px;
	border: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.searchFormBox label,
.searchFormBox span.label {
	margin: 0 4px 0 8px;
	padding: 1px 16px 0 0;
	background: url(<?php echo image_path(opSkinClassicConfig::get('icon_arrow_2_image')) ?>) no-repeat 100% 0;
}
.searchFormBox .input_submit {
	margin-right: 8px;
}
.searchFormBox p.desc {
	margin: 0 4px 16px 8px;
}
.searchFormBox p.form {
	margin: 0 4px 8px 0;
}
.searchFormBox p.note {
	margin: -4px 4px 8px 8px;
}
.searchFormBox ul.moreInfo {
	margin: 0 4px 8px 150px;
}
.searchFormBox div.block {
	padding: 8px 0;
}
.searchFormBox dl.category {
	zoom: 1;
}
.searchFormBox dl.category dt {
	float: left;
	width: 6em;
}
.searchFormBox dl.category dd {
	zoom: 1;
	margin-left: 6em;
}
.searchFormBox dl.category dd p {
	margin: 0 16px;
}
.searchFormBox dl.categories dt {
	margin-bottom: 4px;
}
.searchFormBox table.category th {
	width: 74px;
	padding: 3px 7px 3px 5px;
	border: none;
	background: url(<?php echo image_path(opSkinClassicConfig::get('colon_image')) ?>) no-repeat 100% 4px;
	font-weight: bold;
	vertical-align: top;
}
.searchFormBox table.category td {
	padding: 3px 8px;
	border: none;
	vertical-align: top;
}

/*==============================================================================
 * 8. diaryDetailBox（日記詳細ボックス）
 *----------------------------------------------------------------------------*/
.diaryDetailBox h3 {
	float: left;
	width: 66%;
}
.diaryDetailBox h3 {
	float: left;
	width: 66%;
}
.diaryDetailBox .partsHeading p.public {
	float: right;
	width: 33%;
	margin: 0;
	text-align: right;
}
.diaryDetailBox dl {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.diaryDetailBox dt {
	float: left;
	width: 70px;
	padding-top: 5px;
	text-align: center;
}
.diaryDetailBox dd {
	zoom: 1;
	min-height: 4.5em;
	margin-left: 70px;
	border-left: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
* html .diaryDetailBox dd {
	height: 4.5em;
}
.diaryDetailBox dd div {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.diaryDetailBox dd div p {
	padding: 4px 3px;
}
.diaryDetailBox dd div.title {
	border-top: none;
}
.diaryDetailBox dd div.body {
	padding: 4px 3px;
}
.diaryDetailBox dd ul.photo {
	padding: 4px 5px;
}
.diaryDetailBox dd ul.photo li {
	display: inline;
	margin-left: 6px;
}
.diaryDetailBox div.category ul {
	padding: 4px;
	text-align: right;
}
.diaryDetailBox div.category ul li {
	display: inline;
	font-size: 80%;
}

/*==============================================================================
 * 9. topicDetailBox（トピック詳細ボックス）
 *----------------------------------------------------------------------------*/
.topicDetailBox dl {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.topicDetailBox dt {
	float: left;
	width: 100px;
	padding: 5px;
	text-align: center;
}
.topicDetailBox dd {
	zoom: 1;
	margin-left: 110px;
	border-left: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.topicDetailBox dd div {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.topicDetailBox dd div p {
	padding: 5px;
}
.topicDetailBox dd div.title {
	border-top: none;
}
.topicDetailBox dd ul.photo {
	padding: 5px;
}
.topicDetailBox dd ul.photo li {
	display: inline;
	margin-left: 6px;
}
.topicDetailBox dd div.attachFile {
	padding: 16px 5px;
}
.topicDetailBox div.operation {
	padding: 10px 0;
}

/*==============================================================================
 * 10. eventDetailBox（イベント詳細ボックス）
 *----------------------------------------------------------------------------*/
.eventDetailBox dl {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.eventDetailBox dt {
	float: left;
	width: 100px;
	padding: 5px;
	text-align: center;
}
.eventDetailBox dd {
	zoom: 1;
	margin-left: 110px;
	border-left: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.eventDetailBox dd ul.photo {
	padding: 5px;
	border-bottom: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.eventDetailBox dd ul.photo li {
	display: inline;
	margin-left: 6px;
}
.eventDetailBox dd table th {
	width: 112px;
	text-align: center;
	border-left: none;
}
.eventDetailBox dd table th,
.eventDetailBox dd table td {
	padding: 5px;
}
.eventDetailBox dd table tr:first-child th,
.eventDetailBox dd table tr:first-child td,
.eventDetailBox dd table tr.first-child th,
.eventDetailBox dd table tr.first-child td {
	border-top: none;
}
.eventDetailBox dd table ul.moreInfo {
	margin-top: -1.2em;
	text-align: right;
}
.eventDetailBox dd table ul.moreInfo li {
	display: inline;
	background-position: 0 50%;
}

/*==============================================================================
 * 11. homePhotoBox（ホーム写真ボックス）
 *----------------------------------------------------------------------------*/
.homePhotoBox * {
	text-align: center;
}
.homePhotoBox p.friendLink {
	margin-bottom: 3px;
}
.homePhotoBox .parts {
	padding: 7px;
}
.homePhotoBox ul.moreInfo {
	margin: 2px 0 -5px;
}
.homePhotoBox ul.moreInfo li {
	padding: 1px 0;
	background: none;
}
.homePhotoBox ul.moreInfo li img {
	vertical-align: bottom;
}
.homePhotoBox p.rank {
	margin-top: 6px;
}
.homePhotoBox p.point {
	margin-top: 2px;
}
.homePhotoBox p.text {
	margin-top: 4px;
}
.homePhotoBox p.loginTime {
	margin-top: 0px;
}

/*==============================================================================
 * 12. homeInfoBox（ホームインフォメーションボックス）
 *----------------------------------------------------------------------------*/
.informationBox {
	padding-left: 102px;
	border: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?> url(<?php echo image_path(opSkinClassicConfig::get('icon_information_image')) ?>) no-repeat 5px 50%;
}
.informationBox div.body {
	min-height: 1.2em;
	padding: 5px;
	border-left: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
	background: #<?php echo opSkinClassicConfig::get('box_background_color') ?>;
}
* html .informationBox div.body {
	height: 1.2em;
}
.informationBox .caution {
	color: #ff0000;
}

/*==============================================================================
 * 13. photoUploadFormBox（プロフィール写真アップロードフォームボックス）
 *----------------------------------------------------------------------------*/
.photoUploadFormBox table {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
#Body .photoUploadFormBox td {
	padding: 8px 0;
	border: none;
	text-align: center;
}
.photoUploadFormBox form {
	float: left;
	width: 230px;
}
.photoUploadFormBox form p {
	margin: 8px 0;
	text-align: center;
}
.photoUploadFormBox ul {
	zoom: 1;
	margin: 8px 0 8px 230px;
}
.photoUploadFormBox li {
	padding-left: 12px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('marker_image')) ?>) no-repeat 3px 3px;
}

/*==============================================================================
 * 14. messageDetailBox（メッセージ詳細ボックス）
 *----------------------------------------------------------------------------*/
#Body .messageDetailBox th:first-child,
#Body .messageDetailBox th.first-child {
	border-left-width: 1px;
}
.messageDetailBox th,
.messageDetailBox td {
	padding: 5px;
}
.messageDetailBox td.photo {
	width: 120px;
	text-align: center;
}
.messageDetailBox th {
	width: 54px;
	padding-left: 0;
	padding-right: 16px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('colon_image')) ?>) no-repeat 96% 50%;
	text-align: right;
}
#Body .messageDetailBox td {
	border-left: none;
}
.messageDetailBox ul.photo {
	margin: 10px;
	text-align: center;
}
.messageDetailBox p.text {
	margin: 10px 60px;;
}
.messageDetailBox ul.photo li {
	display: inline;
	margin-left: 6px;
}
.messageDetailBox form.delete {
	float: left;
	width: 50%;
	text-align: left;
}
.messageDetailBox form.send {
	float: right;
	width: 50%;
	text-align: right;
}
.messageDetailBox form ul.moreInfo {
	display: inline;
}
.messageDetailBox div.attachFile {
	padding: 16px 5px;
}

/*==============================================================================
 * 15. albumDetailBox（アルバム詳細ボックス）
 *----------------------------------------------------------------------------*/
.albumDetailBox th,
.albumDetailBox td {
	padding: 5px;
}
.albumDetailBox th {
	width: 75px;
}
.albumDetailBox td.photo {
	width: 190px;
	padding: 5px 0;
	text-align: center;
}
#Body .albumDetailBox th:first-child,
#Body .albumDetailBox th.first-child,
#Body .albumDetailBox td.operation {
	border-left-width: 1px;
}
.albumDetailBox td.operation {
	text-align: right;
}

/*==============================================================================
 * 16. albumImageBox（アルバム画像ボックス）
 *----------------------------------------------------------------------------*/
.albumImageBox p.photo {
	padding: 10px;
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
	text-align: center;
}
.albumImageBox th, .albumImageBox td {
	padding: 5px;
}
#Body .albumImageBox th {
	width: 140px;
	border-left: none;
}

/*==============================================================================
 * 17. searchFormLine（検索フォームライン）
 *----------------------------------------------------------------------------*/
.searchFormLine ul {
	text-align: center;
	padding: 1px 0;
}
.searchFormLine ul li {
	display: inline;
}
.searchFormLine ul li * {
	vertical-align: middle;
}
.searchFormLine ul li label {
	margin-right: 2px;
	padding: 1px 13px 0 0;
	background: url(<?php echo image_path(opSkinClassicConfig::get('icon_arrow_2_image')) ?>) no-repeat 100% 0;
}

/*==============================================================================
 * 18. linkLine（リンクライン）
 *----------------------------------------------------------------------------*/
.linkLine ul.moreInfo {
	text-align: center;
}
.linkLine ul.moreInfo li {
	display: inline;
	background-position: 0 50%;
}

/*==============================================================================
 * 19. prevNextLinkLine（前次リンクライン）
 *----------------------------------------------------------------------------*/
.prevNextLinkLine p.prev {
	float: left;
	width: 50%;
	text-align: left;
}
.prevNextLinkLine p.next {
	float: right;
	width: 50%;
	text-align: right;
}
.block.prevNextLinkLine {
	padding: 4px 10px;
}

/*==============================================================================
 * 20. buttonLine（ボタンライン）
 *----------------------------------------------------------------------------*/
.buttonLine form {
	text-align: center;
}

/*==============================================================================
 * 21. alertLine（アラートライン）
 *----------------------------------------------------------------------------*/
.alertLine p {
	text-align: center;
	color: #ff0000;
}

/*==============================================================================
 * 22. commentList（コメントリスト）
 *----------------------------------------------------------------------------*/
.commentList dl {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.commentList dt {
	float: left;
	width: 70px;
	padding-top: 5px;
	text-align: center;
}
.commentList dd {
	zoom: 1;
	min-height: 5.5em;
	margin-left: 70px;
	border-left: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
* html .commentList dd {
	height: 5.5em;
}
#LayoutC .commentList dt {
	width: 110px;
}
#LayoutC .commentList dd {
	margin-left: 110px;
}
.commentList dd div {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.commentList dd div p {
	padding: 4px 3px;
}
.commentList dd div.title {
	padding: 4px 3px;
	border-top: none;
}
.commentList dd div.title p {
	padding: 0;
}
#pc_page_fh_diary_list .commentList dd div.title p.heading {
	float: left;
	width: 66%;
}
#pc_page_fh_diary_list .commentList dd div.title p.public {
	float: right;
	width: 33%;
	text-align: right;
}
.commentList dd ul.photo {
	padding: 5px 5px 0;
}
.commentList dd ul.photo li {
	display: inline;
	margin-left: 6px;
}
.commentList dd div.footer p {
	text-align: right;
}
.commentList div.operation {
	padding: 8px 0;
}
.commentList dd div.attachFile {
	padding: 16px 5px;
}

/*==============================================================================
 * 23. searchResultList（検索結果リスト）
 *----------------------------------------------------------------------------*/
.searchResultList .partsInfo {
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
.searchResultList .ditem {
	margin: 8px 34px;
}
.searchResultList td.photo {
	width: 90px;
	padding: 0;
	border-left: none;
	text-align: center;
}
.searchResultList th, .searchResultList td {
	padding: 5px;
}
.searchResultList th {
	width: 75px;
}
#Body .searchResultList th:first-child,
#Body .searchResultList th.first-child {
	border-left-width: 1px;
}
.searchResultList tr.operation th {
	padding-top: 0;
	padding-bottom: 0;
}
.searchResultList tr.operation td {
	padding: 0;
}
.searchResultList tr.operation span.text {
	float: left;
	display: block;
	width: 110px;
	padding: 5px;
	border-right: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.searchResultList tr.operation span.moreInfo{
	zoom: 1;
	display: block;
	margin-left: 121px;
	padding: 4px 0 3px;
	text-align: center;
}
.searchResultList div.operation {
	text-align: center;
}
.searchResultList tr.operation span.moreInfo img,
.searchResultList div.operation form,
.searchResultList div.operation fieldset {
	display: inline;
	vertical-align: top;
}

/*==============================================================================
 * 24. reviewList（レビューリスト）
 *----------------------------------------------------------------------------*/
.reviewList dl {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.reviewList dl dt {
	float:left;
	width: 170px;
	padding: 5px;
	text-align: center;
}
.reviewList dl dt span {
	display: block;
	margin: 3px 0;
}
.reviewList dl dd {
	zoom: 1;
	margin-left: 180px;
	border-left: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.reviewList dl dd table {
	height: 216px;
}
.reviewList dl dd th,
.reviewList dl dd td {
	padding: 5px;
}
.reviewList dl tr.title th,
.reviewList dl dd tr.title td {
	border-top: none;
}
.reviewList dl dd th {
	width: 100px;
	border-left: none;
	text-align: center;
}
.reviewList dl dd tr.title td {
	font-weight: bold;
}
.reviewList dl dd td p.operation {
	text-align: right;
}
.reviewList dl dd tr.footer td {
	border-left: none;
	text-align: right;
}
.reviewList div.operation {
	padding: 10px 0;
}

/*==============================================================================
 * 25. recentList（最新書き込みリスト）
 *----------------------------------------------------------------------------*/
.recentList dl {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.recentList dt {
	float: left;
	width: 170px;
	padding: 5px;
	text-align: center;
}
.recentList dd {
	zoom: 1;
	margin-left: 180px;
	padding: 5px;
	border-left: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
* html #Body .recentList dd {
	height: 1.2em;
}
#LayoutB #Center .recentList dt {
	width: 110px;
}
#LayoutB #Center .recentList dd {
	margin-left: 120px;
}

/*==============================================================================
 * 26. friendIntroList（フレンド紹介文リスト）
 *----------------------------------------------------------------------------*/
.friendIntroList th,
.friendIntroList td {
	padding: 14px;
}
#Body .friendIntroList th {
	width: 120px;
	border-left: none;
	text-align: center;
}
.friendIntroList p.text {
	margin-bottom: 1em;
}
.friendIntroList div.moreInfo ul.moreInfo {
	width: 10em;
	margin-left: auto;
	padding: 6px 2px;
}

/*==============================================================================
 * 27. manageList（管理リスト）
 *----------------------------------------------------------------------------*/
.manageList td {
	padding: 5px;
}
.manageList td.photo {
	width: 140px;
	border-left: none;
	text-align: center;
}
.manageList td.delete {
	width: 120px;
}
.manageList col.date {
	width: 160px;
}
* html .manageList col.date {
	width: 150px;
}
*:first-child+html .manageList col.date {
	width: 150px;
}
.manageList col.name {
	width: auto;
}
.manageList colgroup.operation col {
	width: 86px;
}
* html .manageList colgroup.operation col {
	width: 76px;
}
*:first-child+html .manageList colgroup.operation col {
	width: 76px;
}

/*==============================================================================
 * 28. searchCategoryList（検索項目リスト）
 *----------------------------------------------------------------------------*/
.searchCategoryList .partsInfo {
	padding: 5px;
	border-bottom: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
	text-align: center;
}
.searchCategoryList .item {
	margin: 10px 40px;
	border: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
	border-top: none;
}
.searchCategoryList span.label {
	margin: 0 4px 0 8px;
	padding: 1px 16px 0 0;
	background: url(<?php echo image_path(opSkinClassicConfig::get('icon_arrow_2_image')) ?>) no-repeat 100% 0;
}
.searchCategoryList dl {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.searchCategoryList dl dt {
	margin: 8px 0 0;
}
.searchCategoryList dl dd {
	margin: 8px 10px 8px 70px;
}
.searchCategoryList dl dd ul {
	margin: 4px 0;
}
.searchCategoryList dl dd ul li {
	overflow: hidden;
	float: left;
	width: 19%;
	margin: 0 2px;
}

/*==============================================================================
 * 29. messageList（メッセージリスト）
 *----------------------------------------------------------------------------*/
.messageList .partsHeading p.date {
	font-weight: bold;
}
.messageList .pagerRelativeMulti .text {
	width: 160px;
}
.messageList .pagerRelativeMulti .pager {
	width: 350px;
	margin-top: 1px;
}
.messageList p.icons img {
	padding-right: 16px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('articleList_marker_image')) ?>) no-repeat 96% 6px;
	vertical-align: text-bottom;
}
.messageList tr {
	height: 20px;
}
.messageList tr.unread {
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
#Body .messageList th.delete {
	font-weight: normal;
}
#Body .messageList th {
	padding: 0 2px;
	border-width: 1px 0 0;
	font-weight: bold;
}
#Body .messageList td {
	padding: 0 2px;
	border-width: 1px 0 0;
}
#Body .messageList td .input_checkbox {
	margin-left: 4px;
}
.messageList td.status {
	text-align: center;
}
.messageList col.status {
	width: 35px;
}
.messageList col.delete {
	width: 35px;
}
.messageList col.target {
	width: 130px;
}
.messageList col.title {
	width: auto;
}
.messageList col.date {
	width: 80px;
}
.messageList table span {
	width: 100%;
	display: block;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}
.messageList div.operation p {
	margin-top: 8px;
	margin-bottom: 5px;
}
.messageList div.operation ul.moreInfo {
	text-align: left;
}

/*==============================================================================
 * 30. ashiatoList（あしあとリスト）
 *----------------------------------------------------------------------------*/
.ashiatoList div.partsInfo {
	border-bottom: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.ashiatoList div.item {
	margin: 8px 40px;
	padding: 8px 0;
	border: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.ashiatoList div.item p,
.ashiatoList div.item ul.list {
	padding-left: 160px;
}
.ashiatoList div.item p strong {
	margin: 0 2px;
}
.ashiatoList div.item ul.list {
	margin-top: 16px;
}

/*==============================================================================
 * 31. rankingList（ランキングリスト）
 *----------------------------------------------------------------------------*/
.rankingList .partsHeading p {
	margin: 0;
}
#Body .rankingList th:first-child,
#Body .rankingList th.first-child {
	border-left-width: 1px;
}
.rankingList td.photo {
	width: 130px;
	padding: 5px 0;
	text-align: center;
}
.rankingList th {
	width: 75px;
	padding: 5px;
}
.rankingList td {
	padding: 5px;
}
.rankingList td.name {
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
.rankingList td.name a {
	font-weight: bold;
}
.rankingList .ditem {
	margin: 8px 15px;
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
.rankingList .item {
	background: #<?php echo opSkinClassicConfig::get('box_background_color') ?>;
}
.rankingList .item td.photo {
	width: 90px;
}

/*==============================================================================
 * 32. bizSideTodoList（BIZ用Todoリスト）
 *----------------------------------------------------------------------------*/
#Body .bizSideTodoList {
	width: 220px;
	margin: 10px 5px;
	border: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
#Body .bizSideTodoList td {
	border-width: 1px 0 0;
}
.bizSideTodoList .block {
	padding: 5px;
}
.bizSideTodoList textarea {
	width: 98%;
}
.bizSideTodoList tr.someone {
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
.bizSideTodoList tr.checked {
	color: #999999;
}
.bizSideTodoList td.state {
	width: 38px;
	vertical-align: top;
}
.bizSideTodoList tr.priLow td.state p {
	padding-left: 4px;
	border-left: 0;
}
.bizSideTodoList tr.priMiddle td.state p {
	padding-left: 0;
	border-left: 4px solid #ff8080;
}
.bizSideTodoList tr.priHigh td.state p {
	padding-left: 0;
	border-left: 4px solid #ff0000;
}
.bizSideTodoList tr.checked td.state p {
	padding-left: 4px;
	border-left: 0;
}
.bizSideTodoList td.operation {
	width: 16px;
	vertical-align: top;
}
.bizSideTodoList td.operation a {
	display: block;
	width: 14px;
	margin-top: 2px;
}

/*==============================================================================
 * 33. bizSideScheduleList（BIZ用スケジュールリスト） 
 *----------------------------------------------------------------------------*/
#Body .bizSideScheduleList {
	width: 220px;
	margin: 10px 5px;
	border: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.bizSideScheduleList dl {
	border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.bizSideScheduleList dt {
	float: left;
	width: 60px;
	padding: 5px;
	text-align: center;
}
.bizSideScheduleList dd {
	zoom: 1;
	margin-left: 70px;
	padding: 5px;
	border-left: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}

/*==============================================================================
 * 34. albumList（アルバムリスト）
 *----------------------------------------------------------------------------*/
.albumList th,
.albumList td {
	padding: 5px;
}
.albumList th {
	width: 75px;
}
.albumList td.photo {
	width: 190px;
	padding: 5px 0;
	text-align: center;
}
.albumList td.photo p {
	text-align: center;
	padding: 5px;
}
#Body .albumList th:first-child,
#Body .albumList th.first-child {
	border-left-width: 1px;
}
.albumList td.operation {
	text-align: center;
}

/*==============================================================================
 * 35. albumImageList（アルバム画像リスト）
 *----------------------------------------------------------------------------*/
.albumImageList td {
	padding: 5px;
	text-align: center;
}
.albumImageList td p {
	text-align: center;
}

/*==============================================================================
 * 36. nineTable（ホーム9面テーブル）
 *----------------------------------------------------------------------------*/
.nineTable tr.photo td {
	height: 80px;
	padding: 2px 0;
	text-align: center;
}
.nineTable tr.photo td p.crown {
	text-align: center;
}
.nineTable tr.text td {
	padding: 2px;
	text-align: center;
}
.nineTable div.moreInfo {
  border-top: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.nineTable div.moreInfo ul.moreInfo {
	width: 11em;
	margin-left: auto;
	padding: 6px 0;
}

/*==============================================================================
 * 37. photoTable（写真テーブル）
 *----------------------------------------------------------------------------*/
.photoTable {
	width: 561px;
}
.photoTable tr.photo td {
	height: 90px;
	padding: 8px 0;
	text-align: center;
}
.photoTable tr.photo td p.crown {
	text-align: center;
}
.photoTable tr.text td {
	padding: 5px 2px;
	text-align: center;
}

/*==============================================================================
 * 38. homeMainTable（ホームメインテーブル）
 *----------------------------------------------------------------------------*/
#page_member_home #Center h3 .partsHeading,
#page_member_profile #Center h3 .partsHeading,
.listBox .partsHeading h3,
.albumImageList .partsHeading h3,
.homeMainTable .partsHeading h3 {
	float: left;
	width: 66%;
}
#page_member_home #Center h3 p.link,
#page_member_profile #Center h3 p.link,
.listBox .partsHeading p.link, 
.albumImageList .partsHeading p.link, 
.homeMainTable .partsHeading p.link {
	float: right;
	width: 33%;
	margin: 0;
	text-align: right;
}
#page_member_home #Center th,
#page_member_profile #Center th,
.listBox th, 
.homeMainTable th {
	width: 83px;
	background-color: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
#page_member_home #Center div.block,
#page_member_profile #Center div.block,
.listBox th, .listBox td,
.homeMainTable th, .homeMainTable td {
	padding: 5px;
}
#page_member_home #Center ul.articleList,
#page_member_profile #Center ul.articleList,
.listBox ul.articleList,
.homeMainTable ul.articleList {
	line-height: 1.3;
}
#page_member_home #Center ul.articleList li,
#page_member_profile #Center ul.articleList li,
.homeMainTable ul.articleList li {
    padding-left: 85px;
    text-indent: -72px;
}
#page_member_home #Center ul.articleList li,
#page_member_profile #Center ul.articleList li,
.listBox tr ul.articleList li,
.homeMainTable tr ul.articleList li {
    background: url(<?php echo image_path(opSkinClassicConfig::get('icon_3_image')) ?>) 3px 0.4em no-repeat scroll;
}
.homeMainTable tr.myFriendRecentDiary ul.articleList li,
.homeMainTable tr.myFriendRecentBlog ul.articleList li,
.homeMainTable tr.allRecentDiary ul.articleList li,
.homeMainTable tr.bookmarkRecentDiary ul.articleList li,
.homeMainTable tr.bookmarkRecentBlog ul.articleList li,
.homeMainTable tr.myRecentDiary ul.articleList li,
.homeMainTable tr.myRecentBlog ul.articleList li,
.homeMainTable tr.friendRecentDiary ul.articleList li,
.homeMainTable tr.friendRecentBlog ul.articleList li
{
    background-image: url(<?php echo image_path(opSkinClassicConfig::get('icon_1_image')) ?>);
}
.homeMainTable tr.diaryCommentHistory ul.articleList li,
.homeMainTable tr.recentCommunityTopicComment ul.articleList li,
.homeMainTable tr.allRecentCommunityTopicComment ul.articleList li,
.homeMainTable tr.communityTopic ul.articleList li,
.homeMainTable tr.communityEvent ul.articleList li
{
    background-image: url(<?php echo image_path(opSkinClassicConfig::get('icon_2_image')) ?>);
}
#page_member_home #Center ul.articleList li span.date,
#page_member_profile #Center ul.articleList li span.date,
.listBox ul.articleList li span.date,
.homeMainTable ul.articleList li span.date {
	padding-right: 18px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('articleList_marker_image')) ?>) 92% 0.3em no-repeat scroll;
}
#page_member_home #Center div.moreInfo ul.moreInfo,
#page_member_profile #Center div.moreInfo ul.moreInfo,
.listBox div.moreInfo ul.moreInfo,
.homeMainTable div.moreInfo ul.moreInfo {
	width: 10em;
	margin: 0 2px 0 auto;
}
#page_member_home #Center td.halfway ul.moreInfo,
#page_member_profile #Center td.halfway ul.moreInfo,
.listBox td.halfway ul.moreInfo,
.homeMainTable td.halfway ul.moreInfo {
	width: 12em;
	margin: 0 0 20px auto;
}

/*==============================================================================
 * 39. form（入力フォームテーブル）
 *----------------------------------------------------------------------------*/
.form .partsHeading div.text {
	float: left;
	width: 66%;
}
.form .partsHeading p.link {
	float: right;
	width: 33%;
	margin: 0;
	text-align: right;
}
.form strong {
	font-weight: normal;
	color: #ff0000;
}
.form p.caution {
	color: #ff0000;
}
.form div.block {
	background-color: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
	padding: 10px 40px;
}
.form th, .form td {
	padding: 5px;
}
#Body .form th {
	width: 140px;
	border-left: none;
}
#LayoutB #Center .form th {
	width: 80px;
}
.form table table td {
	padding: 0;
	border: none;
}
.form textarea {
	width: 98%;
}
.form input.input_text_long {
	width: 98%;
}
.form table table td.publicSelector {
	width: 150px;
	text-align: right;
}
.form table table td.publicSelector select {
	width: 150px;
}
.form div.checkList li {
	overflow: hidden;
	float: left;
	width: 33%;
	line-height: 1.6;
}
.form div.checkList li div.item {
	padding-left: 18px;
	text-indent: -18px;
}
.form div.operation {
	padding: 10px 0;
}

/*==============================================================================
 * 40. weeklyCalendarTable（週間カレンダーテーブル）
 *----------------------------------------------------------------------------*/
#Body .weeklyCalendarTable .parts {
	border-top: none;
}
.weeklyCalendarTable div.block {
	padding: 5px;
}
.weeklyCalendarTable .input_text {
	width: 120px;
}
.weeklyCalendarTable .input_submit {
	margin-right: 8px;
}
.weeklyCalendarTable .calendar td {
	padding: 5px;
	vertical-align: top;
}
.weeklyCalendarTable .calendar .today {
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
.weeklyCalendarTable .calendar .today p.day {
	font-weight: bold;
}
.weeklyCalendarTable ul.moreInfo {
	margin: 0 2px 0 auto;
	width: 9em;
}

/*==============================================================================
 * 41. monthlyCalendarTable（月間カレンダーテーブル）
 *----------------------------------------------------------------------------*/
.monthlyCalendarTable div.block {
	padding: 2px 5px;
}
.monthlyCalendarTable div.block p.moreInfo {
	float: left;
	width: 70%;
	text-align: left;
}
.monthlyCalendarTable div.block p.moreInfo a {
	margin-right: 4px;
}
.monthlyCalendarTable div.block p.pager {
	float: right;
	width: 30%;
	margin-top: 2px;
	text-align: right;
}
.monthlyCalendarTable .calendar th {
	padding: 2px;
}
.monthlyCalendarTable .calendar td {
	height: 65px;
	padding: 2px;
	vertical-align: top;
}
.monthlyCalendarTable .calendar td.today {
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
	font-weight: bold;
}
.monthlyCalendarTable .calendar td p {
	font-weight: normal;
}
.monthlyCalendarTable .partsInfo {
	padding: 5px;
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
.monthlyCalendarTable .partsInfo img {
	margin: 0 1px;
}

/*==============================================================================
 * 42. bizWeeklyCalendarTable（BIZ用週間カレンダーテーブル）
 *----------------------------------------------------------------------------*/
#Body .bizWeeklyCalendarTable .parts {
	border-top: none;
}
.bizWeeklyCalendarTable div.block {
	padding: 5px;
}
.bizWeeklyCalendarTable .calendar td {
	padding: 5px 0;
	vertical-align: top;
}
.bizWeeklyCalendarTable .calendar td p {
	padding: 0 5px;
}
.bizWeeklyCalendarTable .calendar td .time {
	padding: 0;
}
.bizWeeklyCalendarTable .calendar .today {
	background: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
.bizWeeklyCalendarTable .calendar .today p.day {
	font-weight: bold;
}
.bizWeeklyCalendarTable .calendar th {
	width: 130px;
	padding: 5px 0;
	text-align: center;
}
.bizWeeklyCalendarTable .calendar th * {
	text-align: center;
}
.bizWeeklyCalendarTable .calendar th .input_text {
	width: 118px;
}
.bizWeeklyCalendarTable .calendar th .input_submit {
	width: 120px;
}
.bizWeeklyCalendarTable .calendar th .nickname {
	margin: 5px 0;
}
.bizWeeklyCalendarTable .calendar th .member_image {
	margin-bottom: 5px;
}
.bizWeeklyCalendarTable .calendar td.sub {
	border-width: 0 0 0 1px;
}
.bizWeeklyCalendarTable div.moreInfo {
	padding-left: 135px;
}
.bizWeeklyCalendarTable div.moreInfo .input_submit {
	margin-right: 8px;
}

/*==============================================================================
 * 43. pageNav（サイドナビ）
 *----------------------------------------------------------------------------*/
.pageNav .item {
	width: 150px;
	margin: 0 auto 10px;
	border: 8px solid #<?php echo opSkinClassicConfig::get('left_menu_background_color') ?>;
}
.pageNav .partsHeading {
	border-bottom: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
}
.pageNav ul {
	margin: 1px;
}
.pageNav li {
	padding: 4px 0 4px 18px;
	background: url(<?php echo image_path(opSkinClassicConfig::get('icon_1_image')) ?>) 8px 50% no-repeat scroll;
}
.pageNav li.looking {
	background-color: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
}
.pageNav .calendar .partsHeading {
	padding: 4px 0;
	border: none;
	background: none;
	text-align: center;
}
.pageNav .calendar th {
	background-color: #<?php echo opSkinClassicConfig::get('information_background_color') ?>;
	text-align: center;
}
.pageNav .calendar td {
	padding: 1px 2px;
	text-align: right;
}
.pageNav .list {
	padding: 4px 0;
}
.pageNav .list li {
	padding-left: 16px;
	background: no-repeat 6px 4px;
}
.pageNav .monthlyMessage li  { background-image: url(<?php echo image_path(opSkinClassicConfig::get('icon_1_image')) ?>); }
.pageNav .recentlyDiary li   { background-image: url(<?php echo image_path(opSkinClassicConfig::get('icon_3_image')) ?>); }
.pageNav .recentlyComment li { background-image: url(<?php echo image_path(opSkinClassicConfig::get('icon_1_image')) ?>); }
.pageNav .monthlyDiary li    { background-image: url(<?php echo image_path(opSkinClassicConfig::get('icon_2_image')) ?>); }
.pageNav .listCategory li    { background-image: url(<?php echo image_path(opSkinClassicConfig::get('icon_2_image')) ?>); }

/*==============================================================================
 * 44. rankingSideNav（ランキングサイドナビ）
 *----------------------------------------------------------------------------*/
.rankingSideNav {
	width: 150px;
	margin: 0 auto;
	border: 8px solid #<?php echo opSkinClassicConfig::get('left_menu_background_color') ?>;
}
.rankingSideNav .partsHeading {
	padding: 2px 4px;
	border-bottom: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
	background-image: none;
	text-align: center;
}
.rankingSideNav p {
	margin: 3px;
}
.rankingSideNav p.link {
	padding: 3px;
	border: 1px solid #<?php echo opSkinClassicConfig::get('line_color') ?>;
	text-align: right;
}

/**=============================================================================
 * 配色設定
 *----------------------------------------------------------------------------*/
#Body {
	background: #<?php echo opSkinClassicConfig::get('page_background_color') ?>;
}
#Container {
	background: #<?php echo opSkinClassicConfig::get('contents_background_color') ?>;
}
div.dparts {
	background: #<?php echo opSkinClassicConfig::get('frame_color') ?>;
}
div.parts {
	background-color: #<?php echo opSkinClassicConfig::get('box_background_color') ?>;
}
.sideNav .item {
	background-color: #<?php echo opSkinClassicConfig::get('box_background_color') ?>;
}
#Body .sideNav {
	background-color: transparent;
}
#Body .linkLine,
#Body .searchFormLine,
#Body .buttonLine,
#Body .prevNextLinkLine,
#Body .homeBirthdayBox {
	background-color: transparent;
}

/**=============================================================================
 * ログインページ
 *----------------------------------------------------------------------------*/
div#container_login {
	position: relative;
	display: block;
	margin: 0px auto 0px 0px;
	width: 720px;
	height: 563px;
	padding: 0px;
}

div#container_login img.bg {
	display: block;
	position: absolute;
	left: 0px;
	top: 0px;
	width: 720px;
	height: 563px;
	z-index: 0;
}

div#container_login a img {
	width: 100%;
	height: 100%;
}

div#container_login div.banner,
div#container_login a.banner {
	display: block;
	position: absolute;
	left: 247px;
	top: 5px;
	width: 468px;
	height: 60px;
	z-index: 200;
}

div#container_login div.header a.main_menu {
	display: block;
	display: none;
	position: absolute;
	height: 22px;
	top: 0px;
}

div#container_login input#authMailAddress_mail_address {
	display: block;
	position: absolute;
	left: 504px;
	top: 246px;
	width: 185px;
	height: 23px;
	font-size: 10pt;
	z-index: 100;
}

div#container_login input#authMailAddress_password {
	display: block;
	position: absolute;
	left: 504px;
	top: 299px;
	width: 185px;
	height: 23px;
	font-size: 10pt;
	z-index: 110;
}

div#container_login input#button_login {
	display: block;
	position: absolute;
	left: 536px;
	top: 384px;
	width: 120px;
	height: 24px;
	border: none 0px;
	background-color: transparent;
	z-index: 120;
}

div#container_login a#button_new_regist {
	display: block;
	position: absolute;
	left: 536px;
	top: 414px;
	width: 120px;
	height: 24px;
	border: none 0px;
	z-index: 130;
}

div#container_login div.msg {
	display: block;
	position: absolute;
	border: none 0px;
	padding: 3px 0px;
	left: 504px;
	top: 327px;
	width: 185px;
	height: 42px;
	font-size: 9pt;
	text-align: center;
	z-index: 140;
}

div#container_login div.msg * {
	font-size: 8pt;
}

div#container_login .footer {
	display: block;
	position: absolute;
	left: 0px;
	top: 542px;
	width: 720px;
	height: 21px;
	z-index: 300;
}
div#container_login .footer p {
	margin-right: 12px;
	text-align: right;
	line-height: 21px;
}

/*==============================================================================
 * 文字装飾
 *----------------------------------------------------------------------------*/
span.op_b {
	text-decoration: inherit;
	font-style: inherit;
	font-weight: bold;
	color: inherit;
	font-size: inherit;
}

span.op_u {
	text-decoration: underline;
	font-style: inherit;
	font-weight: inherit;
	color: inherit;
	font-size: inherit;
}

span.op_s {
	text-decoration: line-through;
	font-style: inherit;
	font-weight: inherit;
	color: inherit;
	font-size: inherit;
}

span.op_i {
	text-decoration: inherit;
	font-style: italic;
	font-weight: inherit;
	color: inherit;
	font-size: inherit;
}

span.op_large {
	text-decoration: inherit;
	font-style: inherit;
	font-weight: inherit;
	color: inherit;
	font-size: 20px;
}

span.op_small {
	text-decoration: inherit;
	font-style: inherit;
	font-weight: inherit;
	color: inherit;
	font-size: 8px;
}

span.op_color {
	text-decoration: inherit;
	font-style: inherit;
	font-weight: inherit;
	color: inherit;
	font-size: inherit;
}

/*==============================================================================
 * Activity
 *----------------------------------------------------------------------------*/
div.activityBox div.moreInfo {
  padding-bottom: 5px;
}

#delete_activity,
div.activityBox {
  zoom: 1;
  word-wrap: break-word;
}

/*======================================
 * box_form
 *------------------------------------*/
div.activityBox div.box_form div.box_public_flag {
  float: left;
  width: 75%;
  margin-bottom: 8px;
}

div.activityBox div.box_form div.box_public_flag label {
  margin-left: 8px;
}

div.activityBox div.box_form div.box_count {
  margin-left: 75%;
  text-align: right;
}

div.activityBox div.box_form div.box_count span.note {
  display: none;
}

div.activityBox div.box_form div.box_count span.count {
  margin-right: 10px;
  color: #888888;
  font-size: 24px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

div.activityBox div.box_form div.box_body {
  clear: both;
}

div.activityBox div.box_form div.box_body span.inputForm {
  zoom: 1;
  display: block;
  padding: 0 4px;
}

div.activityBox div.box_form div.box_body span.inputForm textarea {
  display: block;
  width: 98%;
  height: 3.5em;
  margin: auto;
}

div.activityBox div.box_form div.box_body span.submit {
  display: block;
  width: 98%;
  margin: 5px 0 5px 2px;
  text-align: right;
}

div.activityBox div.box_form div.box_body span.submit input.submit {
  min-height: 30px;
  margin: 0;
  padding: 0 8px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  border: 1px solid #888888;
  background: url(<?php echo image_path(opSkinClassicConfig::get('bg_button_a_image')) ?>);
  font-weight: bold;
  font-size: 14px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

div.activityBox div.box_form div.box_body span.submit input.submit:active {
  color: #888888;
}

*:first-child+html div.activityBox div.box_form div.box_body span.submit input.submit {
  padding: 0;
  line-height: 24px;
}

* html div.activityBox div.box_form div.box_body span.submit input.submit {
  padding: 0;
  line-height: 24px;
}

/*======================================
 * box_list
 *------------------------------------*/
#delete_activity div.box_list li.activity,
div.activityBox div.box_list li.activity {
  clear: both;
  padding: 10px 6px 8px;
  border-bottom: 1px solid #cccccc;
}

#delete_activity div.box_list div.box_memberImage,
div.activityBox div.box_list div.box_memberImage {
  overflow: hidden;
  z-index: 256;
  position: relative;
  float: left;
  width: 48px;
  max-height: 48px;
  margin-right: 8px;
}

#delete_activity div.box_list div.box_memberImage p,
div.activityBox div.box_list div.box_memberImage p {
  text-align: center;
}

#delete_activity div.box_list div.box_body,
div.activityBox div.box_list div.box_body {
  z-index: 128;
  position: relative;
  min-height: 48px;
}

* html #delete_activity div.box_list div.box_body,
* html div.activityBox div.box_list div.box_body {
  height: 48px;
}

#delete_activity div.box_list div.box_body p,
div.activityBox div.box_list div.box_body p {
  overflow: hidden;
  text-align: left;
}

#delete_activity div.box_list div.box_body p span.content .name,
div.activityBox div.box_list div.box_body p span.content .name {
  margin-right: 0.5em;
  font-weight: bold;
}

#delete_activity div.box_list div.box_body p span.info,
div.activityBox div.box_list div.box_body p span.info {
  display: block;
  padding-top: 2px;
  padding-bottom: 1.3em;
  color: #888888;
}

#delete_activity div.box_list div.box_body ul.operation,
div.activityBox div.box_list div.box_body ul.operation {
  position: absolute;
  right: 10px;
  bottom: 0;
  margin: 0;
  padding: 0;
}

#delete_activity div.box_list div.box_body ul.operation li,
div.activityBox div.box_list div.box_body ul.operation li {
  display: inline;
  margin-left: 0.5em;
}

/*==============================================================================
 * カスタムCSS
 *----------------------------------------------------------------------------*/
/**フォント色変更**/

/*リンク関連*/
a:link    { color: #026CD1; }
a:visited { color: #004A95; }
a:hover   { color: #76AFE6; }
a:active  { color: #76AFE6; }

/*コンテンツ見出しlv1*/
td.bg_06 span.b_b,
.c_00 { color: #222222; }

/*コンテンツ見出しlv2*/
.c_01 { color: #444444; }

/*強調文字暖色*/
.c_02 { color: #D92C49; }

/*強調文字寒色*/
.c_03 { color: #2C65D9; }

/*その他文字色*/
body { color: #000000; }
