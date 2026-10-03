<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <?php require_once("comunes/head.php") ?>
    <title><?php echo $text['privacy_policy_title']; ?></title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .policy-container {
            max-width: 1000px;
            margin: 50px auto 80px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            padding: 40px 30px;
        }
        .policy-container h1 {
            font-weight: 700;
            margin-bottom: 25px;
        }
        .policy-container h2 {
            font-size: 1.4rem;
            margin-top: 24px;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .policy-container p,
        .policy-container li {
            line-height: 1.8;
            color: #333;
        }
        .policy-container ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>
<?php require_once("comunes/nav.php") ?>

<div class="container">
    <div class="policy-container">
        <h1><?php echo $text['privacy_policy_title']; ?></h1>

        <p><?php echo $text['privacy_policy_intro']; ?></p>

        <ol>
            <li><?php echo $text['privacy_policy_list_1']; ?></li>
            <li><?php echo $text['privacy_policy_list_2']; ?></li>
            <li><?php echo $text['privacy_policy_list_3']; ?></li>
            <li><?php echo $text['privacy_policy_list_4']; ?></li>
        </ol>

        <h2><?php echo $text['privacy_policy_section_collection']; ?></h2>
        <p><?php echo $text['privacy_policy_collection_p1']; ?></p>
        <p><?php echo $text['privacy_policy_collection_p2']; ?></p>
        <p><?php echo $text['privacy_policy_collection_p3']; ?></p>

        <h2><?php echo $text['privacy_policy_section_access']; ?></h2>
        <p><?php echo $text['privacy_policy_access_p1']; ?></p>
        <ul>
            <li><?php echo $text['privacy_policy_access_item_1']; ?></li>
            <li><?php echo $text['privacy_policy_access_item_2']; ?></li>
            <li><?php echo $text['privacy_policy_access_item_3']; ?></li>
            <li><?php echo $text['privacy_policy_access_item_4']; ?></li>
        </ul>

        <h2><?php echo $text['privacy_policy_section_security']; ?></h2>
        <p><?php echo $text['privacy_policy_security_p1']; ?></p>
        <p><?php echo $text['privacy_policy_security_p2']; ?></p>
        <p><?php echo $text['privacy_policy_security_p3']; ?></p>
        <p><?php echo $text['privacy_policy_security_p4']; ?></p>

        <h2><?php echo $text['privacy_policy_section_cookies']; ?></h2>
        <p><?php echo $text['privacy_policy_cookies_p1']; ?></p>
        <p><?php echo $text['privacy_policy_cookies_p2']; ?></p>

        <h2><?php echo $text['privacy_policy_section_links']; ?></h2>
        <p><?php echo $text['privacy_policy_links_p1']; ?></p>
    </div>
</div>
</body>
</html>
