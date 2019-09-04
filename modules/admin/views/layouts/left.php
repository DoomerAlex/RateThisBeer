<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Root</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">-->
<!--            <div class="input-group">-->
<!--                <input type="text" name="q" class="form-control" placeholder="Search..."/>-->
<!--              <span class="input-group-btn">-->
<!--                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--                </button>-->
<!--              </span>-->
<!--            </div>-->
<!--        </form>-->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Меню администратора', 'options' => ['class' => 'header'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Сообщения', 'icon' => 'envelope-o', 'url' => ['/admin/messages']],
                    ['label' => 'Пользователи', 'icon' => 'user', 'url' => ['/admin/user']],
                    [
                        'label' => 'Пиво',
                        'icon' => 'beer',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Список', 'icon' => 'list-ul', 'url' => ['/admin/beer']],
                            ['label' => 'Отзывы', 'icon' => 'star-o', 'url' => ['/admin/beer-rate']],
                            ['label' => 'Теги', 'icon' => 'hashtag', 'url' => ['/admin/beer-tags']],
                        ],

                    ],
                    [
                        'label' => 'Списки',
                        'icon' => 'cog',
                        'url' => '#',
                        'items' => [
                                ['label' => 'Страны', 'icon' => 'flag', 'url' => ['/admin/countries']],
                        ],
                    ],

                    ['label' => 'Меню разработчика', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                ],
            ]
        ) ?>

    </section>

</aside>
