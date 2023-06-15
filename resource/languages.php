<?php
    $languages = array(
        'de_DE' => [
            'lang' => 'de',
            'name' => 'German',
            'native' => 'Deutsch'
        ],
        'en_US' => [
            'lang' => 'en',
            'name' => 'English',
            'native' => 'English'
        ],
        'ru_RU' => [
            'lang' => 'ru',
            'name' => 'Russian',
            'native' => 'Русский'
        ],
    );

    $language = resource_locale_get();
    $lang = $languages[$language]['lang'];

    $current_url = strtok($_SERVER['REQUEST_URI'], '?');
?>
<li id="menu-item-languages" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-languages">
    <div id="current-language">
        <span class="flag flag-<?php echo $lang ?>"></span>
        <span class="lsw-language"><?php echo $languages[$language]['name'] ?></span>
        <span class="lsw-native"><?php echo $languages[$language]['native'] ?></span>
    </div>
    <ul class="sub-menu">
        <?php foreach ($languages as $language => $properties) {
            $lang = $properties['lang'];
            $name = $properties['name'];
            $native = $properties['native'];
        ?>
            <li id="menu-item-lang-<?php echo $lang ?>" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-lang-<?php echo $lang ?>">
                <a href="<?php echo $current_url ?>?lang=<?php echo $lang ?>">
                    <span class="flag flag-<?php echo $lang ?>"></span>
                    <span class="lsw-language"><?php echo $name ?></span>
                    <span class="lsw-native"><?php echo $native ?></span>
                </a>
            </li>
        <?php } ?>
    </ul>
</li>