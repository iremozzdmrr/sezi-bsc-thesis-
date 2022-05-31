<?php require admin_view('static/header') ?>
    <div class="box-">
        <h1>
            Ayarlar
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form action="" method="post" class="form label">
            <ul>
                <li>
                    <label>Site Title</label>
                    <div class="form-content">
                        <input type="text" name="settings[title]" value="<?= setting('title') ?>">
                    </div>
                </li>
                <li>
                    <label>Site Description</label>
                    <div class="form-content">
                        <input type="text" name="settings[description]" value="<?= setting('description') ?>">
                    </div>
                </li>
                <li>
                    <label>Site Keywords</label>
                    <div class="form-content">
                        <input type="text" name="settings[keywords]" value="<?= setting('keywords') ?>">
                    </div>
                </li>
                <li>
                    <label>Site Teması</label>
                    <div class="form-content">
                        <select name="settings[theme]">
                            <option value=""> - Tema Seç -</option>
                            <?php foreach ($themes as $theme): ?>
                                <option <?= setting('theme') == $theme ? ' selected ' : null ?>
                                        value="<?= $theme ?>"><?= $theme ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </li>
            </ul>
            <ul>
                <h1>Bakım Modu Ayarları</h1>
                <li>
                    <label>Bakım Modu</label>
                    <div class="form-content">
                        <select name="settings[maintenance_mode]">
                            <option <?= setting('maintenance_mode') == 1 ? 'selected' : null ?> value="1">Evet</option>
                            <option <?= setting('maintenance_mode') == 2 ? 'selected' : null ?> value="2">Hayır</option>
                        </select>
                    </div>
                </li>
                <li>
                    <label>Bakım Modu Title</label>
                    <div class="form-content">
                        <input type="text" name="settings[maintenance_mode_title]"
                               value="<?= setting('maintenance_mode_title') ?>">
                    </div>
                </li>
                <li>
                    <label>Bakım Modu Açıklama</label>
                    <div class="form-content">
                        <textarea name="settings[maintenance_mode_description]" cols="30"
                                  rows="5"><?= setting('maintenance_mode_description') ?></textarea>
                    </div>
                </li>
            </ul>
            <h1>Tema Ayarları</h1>
            <ul>
                <li>
                    <label>Logo Başlığı</label>
                    <div class="form-content">
                        <input type="text" name="settings[logo]" value="<?= setting('logo') ?>">
                    </div>
                </li>
                <li>
<!--                    <label>Arama Input Placeholder</label>-->
<!--                    <div class="form-content">-->
<!--                        <input type="text" name="settings[search_placeholder]" value="--><?//= setting('search_placeholder') ?><!--">-->
<!--                    </div>-->
<!--                </li>-->
                <li>
                    <label>Footer Hakkımda</label>
                    <div class="form-content">
                        <textarea name="settings[about]" cols="30" rows="5"><?= setting('about') ?></textarea>
                    </div>
                </li>
                <li>
                    <label>Linkedin URL1</label>
                    <div class="form-content">
                        <input type="text" name="settings[linkedin1]" value="<?= setting('linkedin1') ?>">
                    </div>
                </li>
                <li>
                    <label>Linkedin URL2</label>
                    <div class="form-content">
                        <input type="text" name="settings[linkedin2]" value="<?= setting('linkedin2') ?>">
                    </div>
                </li>
                <li>
                    <label>Linkedin URL3</label>
                    <div class="form-content">
                        <input type="text" name="settings[linkedin3]" value="<?= setting('linkedin3') ?>">
                    </div>
                </li>
                <li>
                    <label>Linkedin URL4</label>
                    <div class="form-content">
                        <input type="text" name="settings[linkedin4]" value="<?= setting('linkedin4') ?>">
                    </div>
                </li>
                <li>
                    <label>Hoşgeldin Başlık</label>
                    <div class="form-content">
                        <input type="text" name="settings[welcome_title]" value="<?= setting('welcome_title') ?>">
                    </div>
                </li>
                <li>
                    <label>Welcome Text</label>
                    <div class="form-content">
                        <textarea name="settings[welcome_text]" cols="30" rows="5"><?= setting('welcome_text') ?></textarea>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="submit">
                    <input type="hidden" name="submit" value="1">
                    <button type="submit">Ayarları Kaydet</button>
                </li>
            </ul>
        </form>
    </div>

<?php require admin_view('static/footer') ?>