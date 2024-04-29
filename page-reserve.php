<?php
    get_header();  

    
/*
    Template Name: Reserve
*/

?>

<main id="p-reserve">
        <section class="c-fv">
            <h2 class="c-fv__ttl">
                体験予約
            </h2>
        </section>

        <section class="p-join">
            <div class="p-join__container">
                <p class="p-join__ttl">体験レッスンの流れ</p>
                <div class="p-join__flow">
                    <div class="p-join__flow--item">
                        <span>スタジオに到着</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/price/tri.png" alt="tri">
                    </div>
                    <div class="p-join__flow--item">
                        <span>カウンセリング<p class="is-pc" style="display: none;">シートの記入</p></span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/price/tri.png" alt="tri">
                    </div>
                    <div class="p-join__flow--item is-hid">
                        <span>お着替え</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/price/tri.png" alt="tri">
                    </div>
                    <div class="p-join__flow--item">
                        <span>体験レッスン</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/price/tri.png" alt="tri">
                    </div>
                    <div class="p-join__flow--item">
                        <span> <p class="is-pc">システム・</p>プラン<p class="is-pc">のご</p>説明</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/price/tri.png" alt="tri">
                    </div>
                    <div class="is-hid p-join__flow--item">
                        <span>日程の確認</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/price/tri.png" alt="tri">
                    </div>
                    <div class="p-join__flow--item">
                        <span>終了</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/price/tri.png" alt="tri">
                    </div>
                </div>
                <div class="p-join__price">
                    体験価格5,000円
                    <small>（税込5,500円）</small>
                </div>
            </div>
        </section>
        <section class="p-reserve wow fadeInUp">
            <div class="p-reserve__container">
                <!-- <h2 class="p-reserve__ttl">体験予約</h2> -->
                <p class="p-reserve__desc">
                    下記入力フォームへ必要事項をご入力ください。<span class="is-pc"></span>
                    折り返し担当よりご連絡させていただきます。<br>
                    <span style="font-size: 20px;">「*」は必須入力項目となっておりますのでご注意ください。</span>
                </p>
                <?php echo do_shortcode('[contact-form-7 id="dd4b20d" title="contact form"]'); ?>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/reserve/illust-calendar.jpg" alt="illust-calendar" class="p-reserve__bg--left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/reserve/illust-calendar.jpg" alt="illust-calendar" class="p-reserve__bg--right">
        </section>
        <section class="p-qa wow fadeInUp">
            <div class="p-reserve__container">
                <h2 class="p-reserve__ttl">よくある質問</h2>
                <div class="p-qa__list">
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">体験レッスンでは何をしますか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                まず簡単なカウンセリング(トレーニングの目的、運動歴、健康状態などの確認)をさせていただき、その後、パンチやキックのフォームチェック、ミット打ち、あなたの体力に合わせたトレーニングを行います。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">二人以上での体験も可能ですか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                パーソナル(マンツーマン)レッスン、セミ(ペア)パーソナルレッスンの体験をご用意しております。
                            </p>
                        </div>
                    </div>
                    
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">必要な持ち物はありますか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                動きやすいウェア（金属部品や表側に紐のないもの）、フェイスタオル、水分補給用の飲み物をお持ちください。
                                <br>室内シューズは必要ありません。体験時はボクシンググローブはレンタルいたします。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">ネイルやアクセサリーをしたままでもできますか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                お怪我防止の観点から、アクセサリー類、ロングネイル・ストーンネイルをつけたままのレッスンは対応しかねます。その他の装飾品(指輪・ブレスレット・ネックレス・ミサンガなどのアクセサリー類、金属部品のついたウエア)についても、思わぬ怪我や、ミット・サンドバッグ等を傷つける原因となりますので、必ず外していただきます。アクセサリー類が外せない場合はレッスン対応をお断りする場合がございます。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">更衣室はありますか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                更衣室はご用意しておりますのでスタジオでお着替えいただけます。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">予約時間の何分前に行けばよいですか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                予約時間5分前に直接スタジオに来ていただければ結構です。他のお客様とのバッティング防止のため、予約時間よりも10分以上早くのご来店はご遠慮ください。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">駐車場はありますか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                駐車場はございませんので近隣の駐車場をご利用ください。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/reserve/illust-qa.jpg" alt="illust-qa" class="p-qa__bg--left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/reserve/illust-qa.jpg" alt="illust-qa" class="p-qa__bg--right">
        </section>
        <section class="p-qa wow fadeInUp">
            <div class="p-reserve__container">
                <h2 class="p-reserve__ttl">レッスン内容について</h2>
                <div class="p-qa__list">
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">他の会員さんにトレーニング姿を見られることは無いですか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                完全マンツーマンレッスンの「パーソナル会員様」は貸切でレッスンを行うため、他の会員様に見られることはございません。最大2名参加可能な「セミパーソナル会員様」の場合は、他の会員様と一緒にレッスンを行う場合がございます。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">運動経験がなく年齢的にも心配なのですが大丈夫ですか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                当店に通われる方は20代～50代まで幅広く、運動初心者の方がほとんどです。経験豊富なインストラクターが丁寧に指導しますので安心してお越しください。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">レッスン中はずっとトレーニングするのですか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                レッスンは準備運動のストレッチからはじまり、休憩をはさみながらシャドーボクシング、ミット打ちを行います。決まったプログラムを行うだけでなく、体力や体調をみながら調整しますのでご安心ください。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">妊娠中でも受講できますか?</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                現在、妊娠中の方が受けられるレッスンはご用意しておりません。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">どのくらいのペースで行くのが目安ですか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                シェイプアップや体力づくり目的の方は月8回、ストレス発散・運動の習慣化が目的の方は月4回、お仕事が忙しい方やリフレッシュ目的の方は月2回のペースで通っております。「今月は少し多めにやりたいな」という場合は、追加レッスンも可能です。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/reserve/illust-qa.jpg" alt="illust-qa" class="p-qa__bg--left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/reserve/illust-qa.jpg" alt="illust-qa" class="p-qa__bg--right">
        </section>
        <section class="p-qa wow fadeInUp">
            <div class="p-reserve__container">
                <h2 class="p-reserve__ttl">利用システム・レッスンの予約について</h2>
                <div class="p-qa__list">
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">レッスンの予約はどうすればよいですか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                スタジオでの直接予約、公式LINE、メールにて予約を受け付けております。 
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">当日予約や、当日の予約時間変更はできますか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                当日予約はできかねますが、レッスン枠が空いている場合は予約時間の変更は対応しております。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">予約時間に遅れそうな場合、レッスン時間の延長はできますか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                他のお客様のご予約に影響が出るためレッスン時間の延長はできません。また、事前連絡がなく、ご予約時間を15分過ぎた場合は自動キャンセルとなります。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">途中退室やレッスン時間の短縮はできますか？?</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                可能です。「レッスン後に予定が入っているので早めに切り上げたい」などの場合は、レッスン開始前にインストラクターにお伝えください。また、レッスン中にご気分が優れないときは、すぐにインストラクターにお声がけください。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">キャンセル料は発生しますか？キャンセルはいつまで大丈夫ですか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                キャンセルポリシーは以下のとおりです。レッスンのご予約をいただいた時点で、他の会員様のご予約枠や、体験レッスンのご予約をブロックし、トレーナーを確保しておりますので、ご理解とご協力をお願い致します。<br>

                                　　事前変更・事前キャンセル　→　同月内で１回まで無料、２回目以降はキャンセル料として都度1,000円(税込1,100円)<br>

                                　　当日変更・当日キャンセル　→　レッスン１回分をカウント<br>

                                　　※事前連絡…予約前日21：00まで、以降は当日連絡扱いとなります。<br>

                                　　※翌月繰越レッスンを変更・キャンセルする場合、事前連絡の有無に関わらずレッスン１回分カウントとなります。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">月４回プランで３回しか行けなかった場合は翌月へ繰り越しできますか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                月額プラン会員様は、未消化レッスンを翌月へ1回のみ繰り越すことができます。ただし退会した場合は無効となります。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">体会はできすか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                はい、できます。当スタジオの休会については次のとおりとします。<br>
                                &nbsp;・休会をされる前月10日までに専用フォームにて休会申請を提出します。（10日が土日祝の場合は前営業日が締切り）<br>
                                &nbsp;・電話やメールでの休会手続きは原則不可といたします。<br>
                                &nbsp;・休会期間中は休会費として2,000円(税込2,200円)が口座振替されます。<br>
                                &nbsp;・休会は最大6か月間可能です。6か月を過ぎますと自動的に正規会費徴収となります。<br>
                                &nbsp;・休会期間を延長される場合は再度手続きが必要となります。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/reserve/illust-qa.jpg" alt="illust-qa" class="p-qa__bg--left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/reserve/illust-qa.jpg" alt="illust-qa" class="p-qa__bg--right">
        </section>
        <section class="p-qa wow fadeInUp">
            <div class="p-reserve__container">
                <h2 class="p-reserve__ttl">その他</h2>
                <div class="p-qa__list">
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">クレジットカードは使えますか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                一部のプランを除いてご利用いただくことが可能です。会費のお支払いはクレジットまたは口座振替となります。詳しくはスタッフまでお尋ねください。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">分割払いはできますか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                いいえ、お支払いは一括にてお願いいたします。
                            </p>
                        </div>
                    </div>
                    <div class="p-qa__item">
                        <div class="p-qa__item--quiz">
                            <div class="p-qa__item--quiz_mark">
                                <span>Q</span>
                            </div>
                            <p class="p-qa__item--quiz_txt">ミット打ち用のグローブは購入しなければなりませんか？</p>
                            <div class="p-qa__item--quiz_btn">+</div>
                        </div>
                        <div class="p-qa__item--answer">
                            <div class="p-qa__item--answer--mark">
                                A
                            </div>
                            <p class="p-qa__item--answer--txt">
                                衛生上、マイグローブをご購入ください。ご自身でお気に入りのものをご用意いただいても構いません。もし忘れてしまった場合でもレンタルがございます。衛生面（汚れ・臭い）の観点からマイグローブであっても、必ずインナーグローブや軍手の着用をお願いいたします。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/reserve/illust-qa.jpg" alt="illust-qa" class="p-qa__bg--left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/reserve/illust-qa.jpg" alt="illust-qa" class="p-qa__bg--right">
        </section>
        
        <section class="is-sp-sm p-spstick"> 
            <a href="<?php echo site_url();?>/price" class="p-spstick__item">
                <span class="p-spstick__item--ico">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="vertical-align: middle;fill: #fff;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1"><path d="M791.466667 92.586667a42.666667 42.666667 0 0 0-58.88 11.946666L512 435.2 291.413333 104.533333a42.666667 42.666667 0 0 0-70.826666 46.933334l213.333333 317.866666H298.666667a42.666667 42.666667 0 0 0 0 85.333334h170.666666v85.333333H298.666667a42.666667 42.666667 0 0 0 0 85.333333h170.666666v170.666667a42.666667 42.666667 0 0 0 85.333334 0v-170.666667h170.666666a42.666667 42.666667 0 0 0 0-85.333333h-170.666666v-85.333333h170.666666a42.666667 42.666667 0 0 0 0-85.333334h-133.546666l213.333333-317.866666a42.666667 42.666667 0 0 0-13.653333-58.88z"/></svg>                </span>
                <p class="p-spstick__item--ttl">料金プラン</p>
            </a>
            <a href="#store_info" class="p-spstick__item">
                <span class="p-spstick__item--ico">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="vertical-align: middle;fill: #fff;overflow: hidden;" viewBox="0 0 1025 1024" version="1.1"><path d="M1019.346347 527.082667a21.333333 21.333333 0 0 1-30.037334 0L513.597013 51.370667l-475.733333 475.733333A21.333333 21.333333 0 1 1 7.84768 497.066667L498.27968 6.613333c0-0.106667 0.128-0.256 0.234667-0.362666a21.333333 21.333333 0 0 1 30.144 0c0.106667 0 0.128 0.256 0.234666 0.362666l490.453334 490.453334a21.333333 21.333333 0 0 1 0 30.016zM129.597013 533.333333a21.333333 21.333333 0 0 1 42.666667 0v448h682.666667V533.333333a21.333333 21.333333 0 0 1 42.666666 0v469.333334a21.333333 21.333333 0 0 1-21.333333 21.333333H150.930347a21.333333 21.333333 0 0 1-21.333334-21.333333V533.333333z"/></svg>                </span>
                <p class="p-spstick__item--ttl">店舗情報</p>
            </a>
            <a href="<?php echo site_url();?>/reserve" class="p-spstick__item">
                <span class="p-spstick__item--ico">
                    <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none" style="width: 38px; height: 38px;">
                        <path d="M8.48901 17.7273H18.3556M8.48901 17.7273V21H18.3556V17.7273M8.48901 17.7273C5.20016 15.5455 3.55573 10.0909 4.10387 8.45455C4.54239 7.14545 6.47916 7.54545 7.39273 7.90909C7.39273 4.09091 9.03715 3 13.4223 3C17.8074 3 20 4.09091 20 9.54545C20 13.9091 18.9037 16.8182 18.3556 17.7273" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.39282 7.90909C7.75825 8.27272 8.81799 9 10.1335 9C11.4491 9 13.9705 9 15.0668 9" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.39282 7.90909C7.39282 11.7273 9.03725 12.2727 10.1335 12.2727" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>    
                <p class="p-spstick__item--ttl">体験する</p>
            </a>
            <a href="https://lin.ee/CGarCqb" class="p-spstick__item">
                <span class="p-spstick__item--ico">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon"  style="width: 40px; height: 40px; fill:#fff ;" style="vertical-align: middle;fill: #fff;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1"><path d="M938.666667 456.106667c0 76.245333-29.312 145.066667-90.581334 212.224-89.6 102.997333-289.621333 228.821333-335.530666 247.978666-45.824 19.242667-38.869333-12.245333-37.290667-22.912l5.845333-36.266666c1.450667-11.178667 2.901333-27.733333-1.365333-38.4-4.778667-11.818667-23.722667-18.090667-37.589333-20.992C237.141333 770.517333 85.333333 627.2 85.333333 456.106667c0-190.933333 191.445333-346.368 426.666667-346.368 235.178667 0 426.666667 155.434667 426.666667 346.368z m-153.6 154.666666c47.488-52.053333 68.266667-100.736 68.266666-154.666666 0-139.434667-149.76-261.034667-341.333333-261.034667s-341.333333 121.6-341.333333 261.034667c0 123.946667 116.394667 234.965333 282.709333 257.024l6.272 1.109333c45.994667 9.642667 80.384 26.197333 99.370667 72.874667l1.536 4.096c77.056-50.176 178.090667-127.146667 224.469333-180.437334z m-11.178667-170.666666a22.442667 22.442667 0 0 1 0 44.8h-62.421333v40.021333h62.378666a22.4 22.4 0 1 1 0 44.757333H689.066667a22.442667 22.442667 0 0 1-22.272-22.357333V377.685333c0-12.245333 10.026667-22.4 22.4-22.4h84.821333a22.4 22.4 0 0 1-0.128 44.8h-62.378667v40.021334h62.378667z m-137.088 107.221333a22.357333 22.357333 0 0 1-22.442667 22.272 21.973333 21.973333 0 0 1-18.133333-8.874667l-86.869333-117.930666v104.533333a22.4 22.4 0 0 1-44.672 0V377.685333a22.272 22.272 0 0 1 22.186666-22.314666c6.912 0 13.312 3.669333 17.578667 9.002666l87.552 118.4V377.685333c0-12.245333 10.026667-22.4 22.4-22.4 12.245333 0 22.4 10.154667 22.4 22.4v169.642667z m-204.117333 0a22.485333 22.485333 0 0 1-22.442667 22.357333 22.442667 22.442667 0 0 1-22.314667-22.357333V377.685333c0-12.245333 10.069333-22.4 22.4-22.4 12.330667 0 22.357333 10.154667 22.357334 22.4v169.642667z m-87.68 22.357333H260.138667a22.528 22.528 0 0 1-22.4-22.357333V377.685333a22.485333 22.485333 0 0 1 44.8 0v147.2h62.464a22.4 22.4 0 0 1 0 44.8z"/></svg>
                </span>
                <p class="p-spstick__item--ttl">LINE予約</p>
            </a>
        </section>
    </main>

<?php
    get_footer();
?>