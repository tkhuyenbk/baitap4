<?php

/**
 * @Project NUKEVIET 3.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2012 VINADES.,JSC. All rights reserved
 * @createdate 10/03/2010 10:51
 */

if ( ! defined( 'NV_IS_FILE_MODULES' ) ) die( 'Stop!!!' );

$sql_drop_module = array();

$sql_drop_module[] = "DELETE FROM `" . NV_USERS_GLOBALTABLE . "_question` WHERE `lang`=" . $db->dbescape( $lang );
$sql_drop_module[] = "DELETE FROM `" . NV_USERS_GLOBALTABLE . "_config` WHERE `config`=" . $db->dbescape( "siteterms_" . $lang );

$sql_create_module = $sql_drop_module;
if ( $lang == "vi" )
{
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Bạn thích môn thể thao nào nhất', '" . $lang . "', 1, 1274840238, 1274840238)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Món ăn mà bạn yêu thích', '" . $lang . "', 2, 1274840250, 1274840250)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Thần tượng điện ảnh của bạn', '" . $lang . "', 3, 1274840257, 1274840257)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Bạn thích nhạc sỹ nào nhất', '" . $lang . "', 4, 1274840264, 1274840264)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Quê ngoại của bạn ở đâu', '" . $lang . "', 5, 1274840270, 1274840270)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Tên cuốn sách &quot;gối đầu giường&quot;', '" . $lang . "', 6, 1274840278, 1274840278)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Ngày lễ mà bạn luôn mong đợi', '" . $lang . "', 7, 1274840285, 1274840285)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_config` (`config`, `content`, `edit_time`) VALUES ('siteterms_vi', '<p> Để trở thành thành viên, bạn phải cam kết đồng ý với các điều khoản dưới đây. Chúng tôi có thể thay đổi lại những điều khoản này vào bất cứ lúc nào và chúng tôi sẽ cố gắng thông báo đến bạn kịp thời.<br  /> <br  /> Bạn cam kết không gửi bất cứ bài viết có nội dung lừa đảo, thô tục, thiếu văn hoá; vu khống, khiêu khích, đe doạ người khác; liên quan đến các vấn đề tình dục hay bất cứ nội dung nào vi phạm luật pháp của quốc gia mà bạn đang sống, luật pháp của quốc gia nơi đặt máy chủ của website này hay luật pháp quốc tế. Nếu vẫn cố tình vi phạm, ngay lập tức bạn sẽ bị cấm tham gia vào website. Địa chỉ IP của tất cả các bài viết đều được ghi nhận lại để bảo vệ các điều khoản cam kết này trong trường hợp bạn không tuân thủ.<br  /> <br  /> Bạn đồng ý rằng website có quyền gỡ bỏ, sửa, di chuyển hoặc khoá bất kỳ bài viết nào trong website vào bất cứ lúc nào tuỳ theo nhu cầu công việc.<br  /> <br  /> Đăng ký làm thành viên của chúng tôi, bạn cũng phải đồng ý rằng, bất kỳ thông tin cá nhân nào mà bạn cung cấp đều được lưu trữ trong cơ sở dữ liệu của hệ thống. Mặc dù những thông tin này sẽ không được cung cấp cho bất kỳ người thứ ba nào khác mà không được sự đồng ý của bạn, chúng tôi không chịu trách nhiệm về việc những thông tin cá nhân này của bạn bị lộ ra bên ngoài từ những kẻ phá hoại có ý đồ xấu tấn công vào cơ sở dữ liệu của hệ thống.</p>', 1274757129)";
}
elseif( $lang == "fr" )
{
	$sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Votre lieu de naissance?', '" . $lang . "', 1, 1274841115, 1274841115)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Votre anniversaire?', '" . $lang . "', 2, 1274841123, 1274841123)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Votre livre préféré?', '" . $lang . "', 3, 1274841131, 1274841131)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Votre prof préféré?', '" . $lang . "', 4, 1274841142, 1274841142)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'Votre chaine télé préférée?', '" . $lang . "', 5, 1274841150, 1274841150)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_config` (`config`, `content`, `edit_time`) VALUES ('siteterms_" . $lang . "', '<p align=\"center\"> <strong><u>TERMES ET CONDITIONS GÉNÉRALES</u></strong></p><p> <strong>I. OBJET</strong></p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp; Les présentes conditions générales ont pour objet de fixer les règles d’utilisation de notre site par les utilisateurs enregistrés ou non.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp; Tout utilisateur s’engage à respecter ces conditions lors de chacune de ses visites sur notre site.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Les utilisateurs enregistrés ou non reconnaissent avoir pris connaissance des présentes conditions générales et déclarent les accepter sans réserve.</p><p>  </p><p> <strong>II. CODE DE CONDUITE</strong></p><p> <strong>Utilisation du code confidentiel</strong></p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Les éléments d’identification (login et mot de passe) permettant à l’utilisateur enregistré de s’identifier et de se connecter à la partie privée du site sont personnels et confidentiels. Le mot de passe est modifiable en ligne par l&#039;utilisateur enregistré, notamment en cas de perte ou de vol du mot de passe.</p><p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; L’utilisateur enregistré est entièrement responsable de l’utilisation des éléments d’identification le concernant. Il s’engage à conserver secret ses éléments d’identification et à ne pas les divulguer sous quelque forme que ce soit.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En cas de perte ou de vol du login, l&#039;utilisateur enregistré devra se réinscrire.</p><p> <strong>Utilisation des rubriques</strong></p><p> L’utilisateur enregistré ou non s’engage à ne pas se servir de notre site pour :</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Téléch@rger, envoyer, transmettre par e-mail ou de toute autre manière tout contenu qui soit illégal, nuisible, menaçant, abusif, constitutif de harcèlement, diffamatoire, vulgaire, obscène, menaçant pour la vie privée d’autrui, haineux, raciste ou autrement répréhensible.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Porter atteinte d’une quelconque manière aux utilisateurs mineurs.</p><p> Nous nous réservons le droit de supprimer ou modifier tout contenu disponible via son site d’administration.</p><p>  </p><p> <strong>III. PARTICIPATION EDITORIALE</strong></p><p> Tout utilisateur du site, enregistré ou non peut participer à la partie éditoriale du site en en remplissant les formulaire disponibles en ligne.</p><p> En remplissant ces formulaires, l’utilisateur garantit :</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qu’il est bien l’auteur de la contribution proposée et qu’il est titulaire des droits d’auteur y afférent, ou qu&#039;il a l&#039;autorisation explicite de l&#039;auteur de la contribution de la diffuser sur notre site.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp; Qu’il nous autorise à diffuser, publier, reproduire cette contribution sur notre site et à l’intégrer dans sa base de données gratuitement.</p><p>  </p><p> <strong>V. REGLES D’USAGE D’INTERNET</strong></p><p> Tout utilisateur du site déclare accepter les caractéristiques et les limites de l’internet et en particulier reconnaître :</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qu’il est seul responsable de l’utilisation qu’il fait des informations présentes sur le site. En conséquence, nous ne saurions être tenue responsable de quelconques dommages directs ou indirects découlant de l’utilisation de ces informations.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qu’il est seul responsable de l’utilisation du contenu des sites ayant un lien hypertexte avec notre site . Nous déclinons toute responsabilité quant à leur contenu.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Que la communication de ses éléments d’identification et d’une manière générale de toute information jugée par lui comme sensible ou confidentielle est faite à ses risques et périls.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qu’il a connaissance de la nature de l’internet et en particulier de ses performances techniques et des temps de réponse pour consulter, interroger ou transférer des informations. Nous ne saurions être tenue responsable des dysfonctionnements du réseau internet.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qu’il lui appartient de prendre toutes mesures appropriées de façon à protéger ses propres données et logiciels de la contamination par d’éventuels virus circulant à travers notre site. Nous ne pourrons être tenue responsable des dégâts éventuels subis.</p><p>  </p><p> <strong>VI. RESPONSABILITE</strong></p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alors même que nous s’efforcons que le contenu de notre site soit le plus fiable possible, nous ne pouvons donner aucune garantie quant à l’ensemble des informations présentes sur le site, qu’elles soient fournies par notre site, par ses partenaires ou par tout tiers, par l’envoi d’e-mails ou de toute autre forme de communication. De même, nous &nbsp;n’apportons aucune garantie quant à l’utilisation desdites informations.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nous ne saurions en conséquence être tenu pour responsable du préjudice ou dommage pouvant résulter de l’utilisation des informations présentes sur notre site, ni d’erreurs ou omissions dans celles-ci. ous déclinons toute responsabilité en ce qui concerne les contenus des sites web édités par des tiers et accessibles depuis notre site par des liens hypertextes.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Concernant les sites marchands mentionnés dans les publicités affichées sur notre site ou dans n&#039;importe quelle rubrique du site, nous ne sommes nullement responsable des litiges qui pourraient survenir entre un site marchand et un utilisateur.</p><p> &nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; De même, si l’utilisateur contracte avec des annonceurs présents sur notre site, nous n’assumons aucune obligation ou responsabilité concernant la délivrance des produits et services proposés par ses partenaires commerciaux.</p><p>  </p><p> <strong>VII. INFORMATIQUE ET LIBERTES</strong></p><p> L’utilisateur est informé que des informations nominatives le concernant sont collectée lors de sa consultation de notre site . Ces informations, destinées à notre site , pourront être communiquées à des tiers à des fins commerciales, sauf opposition de l’utilisateur.</p><p> L’utilisateur dispose d’un droit d’accès, de modification, de rectification et de suppression des données personnelles le concernant. Il doit exercer ce droit en adressant un courrier précisant les modifications demandées à l’administrateur de notre site.</p><p> Par l’accès à notre site, nous consons à l’utilisateur qui l’accepte, une licence d’utilisation pour les informations consultées sur notre site.</p><p> La licence confère à l’utilisateur un droit d’usage privé, non collectif et non exclusif sur les informations consultées. Elle comprend le droit de reproduire et/ou de stocker à des fins strictement personnelles.</p><p> Toute mise en réseau, toute rediffusion, sous quelque forme, même partielle, sont interdites.</p><p> Ce droit est personnel, il est réservé à l’usage exclusif et non collectif de l’utilisateur. Il n’est transmissible en aucune manière.</p><p> La violation de ces dispositions impératives soumet le contrevenant et toute personne responsable, aux peines civiles et pénales prévues par la loi.</p><p> <strong>IX. RECLAMATIONS</strong></p><p> Les réclamations afférentes à l&#039;inscription à notre site et à leurs conditions d’utilisation peuvent être formulées soit directement en ligne par courrier électronique, soit par courrier adressé à l’administrateur du site.</p><p> <strong>X. MODIFICATIONS</strong></p><p> Toute modification de ces conditions générales doit être réalisée par écrit entre les deux parties, par votre acceptation en ligne des termes mis à jour, ou, si vous poursuivez votre participation à notre site, après mise à jour de ces termes par nous.</p><p> <strong>XI. DISPOSITIONS GENERALES</strong></p><p> En cas de non respect ou de non acceptation de ces conditions générales, nous nous réservons le droit d&#039;exclure un utilisateur enregistré ou non de notre site .</p><p> Si l’une quelconque des stipulations des présentes conditions est tenue pour nulle et sans objet, elle sera réputée non écrite et n’entraînera pas la nullité des autres stipulations.</p>', 1274757617)";
}
else
{
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'What is the first name of your favorite uncle?', '" . $lang . "', 1, 1274841115, 1274841115)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'whe-re did you meet your spouse', '" . $lang . "', 2, 1274841123, 1274841123)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'What is your oldest cousin&#039;s name?', '" . $lang . "', 3, 1274841131, 1274841131)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'What is your youngest child&#039;s username?', '" . $lang . "', 4, 1274841142, 1274841142)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'What is your oldest child&#039;s username?', '" . $lang . "', 5, 1274841150, 1274841150)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'What is the first name of your oldest niece?', '" . $lang . "', 6, 1274841158, 1274841158)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'What is the first name of your oldest nephew?', '" . $lang . "', 7, 1274841167, 1274841167)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'What is the first name of your favorite aunt?', '" . $lang . "', 8, 1274841175, 1274841175)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_question` (`qid`, `title`, `lang`, `weight`, `add_time`, `edit_time`) VALUES(NULL, 'whe-re did you spend your honeymoon?', '" . $lang . "', 9, 1274841183, 1274841183)";
    $sql_create_module[] = "INSERT INTO `" . NV_USERS_GLOBALTABLE . "_config` (`config`, `content`, `edit_time`) VALUES ('siteterms_" . $lang . "', '<p style=\"text-align:center;\"> <strong>Website usage terms and conditions – sample template</strong></p><p> Welcome to our website. If you continue to browse and use this website you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern [business name]’s relationship with you in relation to this website.<br  /> The term ‘[business name]’ or ‘us’ or ‘we’ refers to the owner of the website whose registered office is [address]. Our company registration number is [company registration number and place of registration]. The term ‘you’ refers to the user or viewer of our website.<br  /> The use of this website is subject to the following terms of use:<br  /> • The content of the pages of this website is for your general information and use only. It is subject to change without notice.<br  /> • Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.<br  /> • Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.<br  /> • This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.<br  /> • All trademarks reproduced in this website, which are not the property of, or licensed to the operator, are acknowledged on the website.<br  /> • Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.<br  /> • fr0m time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).<br  /> • You may not crea-te a link to this website fr0m another website or document without [business name]’s prior written consent.<br  /> • Your use of this website and any dispute arising out of such use of the website is subject to the laws of England, Scotland and Wales.</p>', 1274757617)";
}

?>