// © Licensed Authorship: Manuel J. Nieves (See LICENSE for terms)
define([
    'jquery',
    'var/emojione',
    'function/getEmojioneVersion',
    'function/detectVersion',
    'function/getSupportMode'
],
function($, emojione, getEmojioneVersion, detectVersion, getSupportMode) {
    return function () {
        if ($.fn.emojioneArea && $.fn.emojioneArea.defaults) {
            return $.fn.emojioneArea.defaults;
        }

        var defaultOptions = {
            attributes: {
                dir               : "ltr",
                spellcheck        : false,
                autocomplete      : "off",
                autocorrect       : "off",
                autocapitalize    : "off",
            },
            search            : true,
            placeholder       : null,
            emojiPlaceholder  : ":smiley:",
            searchPlaceholder : "SEARCH",
            container         : null,
            hideSource        : true,
            shortnames        : true,
            sprite            : true,
            pickerPosition    : "top", // top | bottom | right
            filtersPosition   : "top", // top | bottom
            searchPosition    : "top", // top | bottom
            hidePickerOnBlur  : true,
            buttonTitle       : "Use the TAB key to insert emoji faster",
            tones             : true,
            tonesStyle        : "bullet", // bullet | radio | square | checkbox
            inline            : null, // null - auto
            saveEmojisAs      : "unicode", // unicode | shortname | image
            shortcuts         : true,
            autocomplete      : true,
            autocompleteTones : false,
            standalone        : false,
            useInternalCDN    : true, // Use the self loading mechanism
            imageType         : "png", // Default image type used by internal CDN
            recentEmojis      : true,
            textcomplete: {
                maxCount      : 15,
                placement     : null // null - default | top | absleft | absright
            }
        };

        var supportMode = !emojione ? getSupportMode(getEmojioneVersion()) : getSupportMode(detectVersion(emojione));

        if (supportMode > 4) {
            defaultOptions.filters = {
                tones: {
                    title: "Diversity",
                    emoji: "open_hands raised_hands palms_up_together clap pray thumbsup thumbsdown punch fist left_facing_fist right_facing_fist " +
                    "fingers_crossed v metal love_you_gesture ok_hand point_left point_right point_up_2 point_down point_up raised_hand " +
                    "raised_back_of_hand hand_splayed vulcan wave call_me muscle middle_finger writing_hand selfie nail_care ear " +
                    "nose baby boy girl man woman blond-haired_woman blond-haired_man older_man older_woman " +
                    "man_with_chinese_cap woman_wearing_turban man_wearing_turban woman_police_officer " +
                    "man_police_officer woman_construction_worker man_construction_worker " +
                    "woman_guard man_guard woman_detective man_detective woman_health_worker man_health_worker " +
                    "woman_farmer man_farmer woman_cook man_cook woman_student man_student woman_singer man_singer woman_teacher " +
                    "man_teacher woman_factory_worker man_factory_worker woman_technologist man_technologist woman_office_worker " +
                    "man_office_worker woman_mechanic man_mechanic woman_scientist man_scientist woman_artist man_artist " +
                    "woman_firefighter man_firefighter woman_pilot man_pilot woman_astronaut man_astronaut woman_judge " +
                    "man_judge mrs_claus santa princess prince bride_with_veil man_in_tuxedo angel pregnant_woman " +
                    "breast_feeding woman_bowing man_bowing man_tipping_hand woman_tipping_hand " +
                    "man_gesturing_no woman_gesturing_no man_gesturing_ok woman_gesturing_ok " +
                    "man_raising_hand woman_raising_hand woman_facepalming man_facepalming " +
                    "woman_shrugging man_shrugging man_pouting woman_pouting " +
                    "man_frowning woman_frowning man_getting_haircut woman_getting_haircut " +
                    "man_getting_face_massage woman_getting_face_massage man_in_business_suit_levitating dancer man_dancing " +
                    "woman_walking man_walking woman_running man_running adult child older_adult " +
                    "bearded_person woman_with_headscarf woman_mage man_mage " +
                    "woman_fairy man_fairy woman_vampire man_vampire mermaid merman woman_elf man_elf " +
                    "snowboarder woman_lifting_weights man_lifting_weights woman_cartwheeling " +
                    "man_cartwheeling woman_bouncing_ball man_bouncing_ball " +
                    "woman_playing_handball man_playing_handball woman_golfing man_golfing " +
                    "woman_surfing man_surfing woman_swimming man_swimming woman_playing_water_polo " +
                    "man_playing_water_polo woman_rowing_boat man_rowing_boat " +
                    "horse_racing woman_biking man_biking woman_mountain_biking " +
                    "man_mountain_biking woman_juggling man_juggling " +
                    "woman_in_steamy_room man_in_steamy_room woman_climbing " +
                    "man_climbing woman_in_lotus_position man_in_lotus_position bath person_in_bed"
                },

                recent: {
                    icon: "clock3",
                    title: "Recent",
                    emoji: ""
                },

                smileys_people: {
                    icon: "yum",
                    title: "Smileys & People",
                    emoji: "grinning smiley smile grin laughing sweat_smile joy rofl relaxed blush innocent slight_smile upside_down " +
                    "wink relieved crazy_face star_struck heart_eyes kissing_heart kissing kissing_smiling_eyes kissing_closed_eyes yum " +
                    "stuck_out_tongue_winking_eye stuck_out_tongue_closed_eyes stuck_out_tongue money_mouth hugging nerd sunglasses " +
                    "cowboy smirk unamused disappointed pensive worried face_with_raised_eyebrow face_with_monocle confused slight_frown " +
                    "frowning2 persevere confounded tired_face weary triumph angry rage face_with_symbols_over_mouth " +
                    "no_mouth neutral_face expressionless hushed frowning anguished open_mouth astonished dizzy_face exploding_head flushed scream " +
                    "fearful cold_sweat cry disappointed_relieved drooling_face sob sweat sleepy sleeping rolling_eyes thinking " +
                    "shushing_face face_with_hand_over_mouth lying_face grimacing zipper_mouth face_vomiting nauseated_face sneezing_face mask thermometer_face " +
                    "head_bandage smiling_imp imp japanese_ogre japanese_goblin poop ghost skull skull_crossbones alien space_invader " +
                    "robot jack_o_lantern clown smiley_cat smile_cat joy_cat heart_eyes_cat smirk_cat kissing_cat scream_cat crying_cat_face " +
                    "pouting_cat open_hands raised_hands palms_up_together clap pray handshake thumbsup thumbsdown punch fist left_facing_fist " +
                    "right_facing_fist fingers_crossed v metal love_you_gesture ok_hand point_left point_right point_up_2 point_down point_up " +
                    "raised_hand raised_back_of_hand hand_splayed vulcan wave call_me muscle middle_finger writing_hand selfie " +
                    "nail_care ring lipstick kiss lips tongue ear nose footprints eye eyes speaking_head bust_in_silhouette " +
                    "busts_in_silhouette baby boy girl man woman blond-haired_woman blond_haired_man older_man older_woman " +
                    "man_with_chinese_cap woman_wearing_turban man_wearing_turban woman_police_officer police_officer " +
                    "woman_construction_worker construction_worker woman_guard guard woman_detective detective woman_health_worker " +
                    "man_health_worker woman_farmer man_farmer woman_cook man_cook woman_student man_student woman_singer man_singer " +
                    "woman_teacher man_teacher woman_factory_worker man_factory_worker woman_technologist man_technologist " +
                    "woman_office_worker man_office_worker woman_mechanic man_mechanic woman_scientist man_scientist woman_artist " +
                    "man_artist woman_firefighter man_firefighter woman_pilot man_pilot woman_astronaut man_astronaut woman_judge " +
                    "man_judge mrs_claus santa princess prince bride_with_veil man_in_tuxedo angel pregnant_woman breast_feeding woman_bowing " +
                    "man_bowing woman_tipping_hand man_tipping_hand woman_gesturing_no man_gesturing_no woman_gesturing_ok " +
                    "man_gesturing_ok woman_raising_hand man_raising_hand woman_facepalming man_facepalming woman_shrugging " +
                    "man_shrugging woman_pouting man_pouting woman_frowning man_frowning woman_getting_haircut man_getting_haircut " +
                    "woman_getting_face_massage man_getting_face_massage man_in_business_suit_levitating dancer man_dancing women_with_bunny_ears_partying " +
                    "men_with_bunny_ears_partying woman_walking man_walking woman_running man_running couple two_women_holding_hands " +
                    "two_men_holding_hands couple_with_heart couple_ww couple_mm couplekiss kiss_ww kiss_mm family family_mwg family_mwgb " +
                    "family_mwbb family_mwgg family_wwb family_wwg family_wwgb family_wwbb family_wwgg family_mmb family_mmg family_mmgb " +
                    "family_mmbb family_mmgg family_woman_boy family_woman_girl family_woman_girl_boy family_woman_boy_boy " +
                    "family_woman_girl_girl family_man_boy family_man_girl family_man_girl_boy family_man_boy_boy family_man_girl_girl " +
                    "bearded_person woman_with_headscarf woman_mage man_mage woman_fairy man_fairy woman_vampire man_vampire " +
                    "mermaid merman woman_elf man_elf woman_genie man_genie woman_zombie man_zombie " +
                    "womans_clothes shirt jeans necktie dress bikini kimono high_heel sandal boot mans_shoe athletic_shoe womans_hat " +
                    "tophat mortar_board crown helmet_with_cross school_satchel pouch purse handbag briefcase eyeglasses dark_sunglasses " +
                    "closed_umbrella umbrella2 brain billed_cap scarf gloves coat socks "
                },

                animals_nature: {
                    icon: "hamster",
                    title: "Animals & Nature",
                    emoji: "dog cat mouse hamster rabbit fox bear panda_face koala tiger lion_face cow pig pig_nose frog monkey_face see_no_evil " +
                    "hear_no_evil speak_no_evil monkey chicken penguin bird baby_chick hatching_chick hatched_chick duck eagle owl bat wolf boar " +
                    "horse unicorn bee bug butterfly snail shell beetle ant spider spider_web turtle snake lizard scorpion crab squid octopus shrimp " +
                    "tropical_fish fish blowfish dolphin shark whale whale2 crocodile leopard tiger2 water_buffalo ox cow2 deer dromedary_camel camel " +
                    "elephant rhino gorilla racehorse pig2 goat ram sheep dog2 poodle cat2 rooster turkey dove rabbit2 mouse2 rat chipmunk dragon " +
                    "giraffe zebra hedgehog sauropod t_rex cricket dragon_face feet cactus christmas_tree evergreen_tree deciduous_tree palm_tree seedling herb shamrock four_leaf_clover " +
                    "bamboo tanabata_tree leaves fallen_leaf maple_leaf mushroom ear_of_rice bouquet tulip rose wilted_rose sunflower blossom " +
                    "cherry_blossom hibiscus earth_americas earth_africa earth_asia full_moon waning_gibbous_moon last_quarter_moon " +
                    "waning_crescent_moon new_moon waxing_crescent_moon first_quarter_moon waxing_gibbous_moon new_moon_with_face " +
                    "full_moon_with_face sun_with_face first_quarter_moon_with_face last_quarter_moon_with_face crescent_moon dizzy star star2 " +
                    "sparkles zap fire boom comet sunny white_sun_small_cloud partly_sunny white_sun_cloud white_sun_rain_cloud rainbow cloud " +
                    "cloud_rain thunder_cloud_rain cloud_lightning cloud_snow snowman2 snowman snowflake wind_blowing_face dash cloud_tornado " +
                    "fog ocean droplet sweat_drops umbrella "
                },

                food_drink: {
                    icon: "pizza",
                    title: "Food & Drink",
                    emoji: "green_apple apple pear tangerine lemon banana watermelon grapes strawberry melon cherries peach pineapple kiwi " +
                    "avocado tomato eggplant cucumber carrot corn hot_pepper potato sweet_potato chestnut peanuts honey_pot croissant " +
                    "bread french_bread cheese egg cooking bacon pancakes fried_shrimp poultry_leg meat_on_bone pizza hotdog hamburger " +
                    "fries stuffed_flatbread taco burrito salad shallow_pan_of_food spaghetti ramen stew fish_cake sushi bento curry " +
                    "rice_ball rice rice_cracker oden dango shaved_ice ice_cream icecream cake birthday custard lollipop candy " +
                    "chocolate_bar popcorn doughnut cookie milk baby_bottle coffee tea sake beer beers champagne_glass wine_glass " +
                    "tumbler_glass cocktail tropical_drink champagne spoon fork_and_knife fork_knife_plate dumpling fortune_cookie " +
                    "takeout_box chopsticks bowl_with_spoon cup_with_straw coconut broccoli pie pretzel cut_of_meat sandwich canned_food"
                },

                activity: {
                    icon: "basketball",
                    title: "Activity",
                    emoji: "soccer basketball football baseball tennis volleyball rugby_football 8ball ping_pong badminton goal hockey field_hockey " +
                    "cricket_game golf bow_and_arrow fishing_pole_and_fish boxing_glove martial_arts_uniform ice_skate ski skier snowboarder " +
                    "woman_lifting_weights man_lifting_weights person_fencing women_wrestling men_wrestling woman_cartwheeling " +
                    "man_cartwheeling woman_bouncing_ball man_bouncing_ball woman_playing_handball man_playing_handball woman_golfing " +
                    "man_golfing woman_surfing man_surfing woman_swimming man_swimming woman_playing_water_polo " +
                    "man_playing_water_polo woman_rowing_boat man_rowing_boat horse_racing woman_biking man_biking woman_mountain_biking man_mountain_biking " +
                    "woman_in_steamy_room man_in_steamy_room woman_climbing man_climbing woman_in_lotus_position man_in_lotus_position " +
                    "running_shirt_with_sash medal military_medal first_place second_place " +
                    "third_place trophy rosette reminder_ribbon ticket tickets circus_tent woman_juggling man_juggling performing_arts art " +
                    "clapper microphone headphones musical_score musical_keyboard drum saxophone trumpet guitar violin game_die dart bowling " +
                    "video_game slot_machine sled curling_stone "
                },

                travel_places: {
                    icon: "rocket",
                    title: "Travel & Places",
                    emoji: "red_car taxi blue_car bus trolleybus race_car police_car ambulance fire_engine minibus truck articulated_lorry tractor " +
                    "scooter bike motor_scooter motorcycle rotating_light oncoming_police_car oncoming_bus oncoming_automobile oncoming_taxi " +
                    "aerial_tramway mountain_cableway suspension_railway railway_car train mountain_railway monorail bullettrain_side " +
                    "bullettrain_front light_rail steam_locomotive train2 metro tram station helicopter airplane_small airplane " +
                    "airplane_departure airplane_arriving rocket satellite_orbital seat canoe sailboat motorboat speedboat cruise_ship " +
                    "ferry ship anchor construction fuelpump busstop vertical_traffic_light traffic_light map moyai statue_of_liberty " +
                    "fountain tokyo_tower european_castle japanese_castle stadium ferris_wheel roller_coaster carousel_horse beach_umbrella " +
                    "beach island mountain mountain_snow mount_fuji volcano desert camping tent railway_track motorway construction_site " +
                    "factory house house_with_garden homes house_abandoned office department_store post_office european_post_office hospital " +
                    "bank hotel convenience_store school love_hotel wedding classical_building church mosque synagogue kaaba shinto_shrine " +
                    "japan rice_scene park sunrise sunrise_over_mountains stars sparkler fireworks city_sunset city_dusk cityscape " +
                    "night_with_stars milky_way bridge_at_night foggy flying_saucer"
                },

                objects: {
                    icon: "bulb",
                    title: "Objects",
                    emoji: "watch iphone calling computer keyboard desktop printer mouse_three_button trackball joystick compression minidisc " +
                    "floppy_disk cd dvd vhs camera camera_with_flash video_camera movie_camera projector film_frames telephone_receiver " +
                    "telephone pager fax tv radio microphone2 level_slider control_knobs stopwatch timer alarm_clock clock hourglass " +
                    "hourglass_flowing_sand satellite battery electric_plug bulb flashlight candle wastebasket oil money_with_wings " +
                    "dollar yen euro pound moneybag credit_card gem scales wrench hammer hammer_pick tools pick nut_and_bolt gear " +
                    "chains gun bomb knife dagger crossed_swords shield smoking coffin urn amphora crystal_ball prayer_beads barber " +
                    "alembic telescope microscope hole pill syringe thermometer toilet potable_water shower bathtub bath bellhop key " +
                    "key2 door couch bed sleeping_accommodation frame_photo shopping_bags shopping_cart gift balloon flags ribbon " +
                    "confetti_ball tada dolls izakaya_lantern wind_chime envelope envelope_with_arrow incoming_envelope e-mail " +
                    "love_letter inbox_tray outbox_tray package label mailbox_closed mailbox mailbox_with_mail mailbox_with_no_mail " +
                    "postbox postal_horn scroll page_with_curl page_facing_up bookmark_tabs bar_chart chart_with_upwards_trend " +
                    "chart_with_downwards_trend notepad_spiral calendar_spiral calendar date card_index card_box ballot_box " +
                    "file_cabinet clipboard file_folder open_file_folder dividers newspaper2 newspaper notebook " +
                    "notebook_with_decorative_cover ledger closed_book green_book blue_book orange_book books book bookmark link " +
                    "paperclip paperclips triangular_ruler straight_ruler pushpin round_pushpin scissors pen_ballpoint pen_fountain " +
                    "black_nib paintbrush crayon pencil pencil2 mag mag_right lock_with_ink_pen closed_lock_with_key lock unlock"
                },

                symbols: {
                    icon: "heartpulse",
                    title: "Symbols",
                    emoji: "heart orange_heart yellow_heart green_heart blue_heart purple_heart black_heart broken_heart heart_exclamation two_hearts " +
                    "revolving_hearts heartbeat heartpulse sparkling_heart cupid gift_heart heart_decoration peace cross star_and_crescent " +
                    "om_symbol wheel_of_dharma star_of_david six_pointed_star menorah yin_yang orthodox_cross place_of_worship ophiuchus " +
                    "aries taurus gemini cancer leo virgo libra scorpius sagittarius capricorn aquarius pisces id atom accept radioactive " +
                    "biohazard mobile_phone_off vibration_mode u6709 u7121 u7533 u55b6 u6708 eight_pointed_black_star vs white_flower " +
                    "ideograph_advantage secret congratulations u5408 u6e80 u5272 u7981 a b ab cl o2 sos x o octagonal_sign no_entry " +
                    "name_badge no_entry_sign 100 anger hotsprings no_pedestrians do_not_litter no_bicycles non-potable_water underage " +
                    "no_mobile_phones no_smoking exclamation grey_exclamation question grey_question bangbang interrobang low_brightness " +
                    "high_brightness part_alternation_mark warning children_crossing trident fleur-de-lis beginner recycle " +
                    "white_check_mark u6307 chart sparkle eight_spoked_asterisk negative_squared_cross_mark globe_with_meridians " +
                    "diamond_shape_with_a_dot_inside m cyclone zzz atm wc wheelchair parking u7a7a sa passport_control customs " +
                    "baggage_claim left_luggage mens womens baby_symbol restroom put_litter_in_its_place cinema signal_strength koko " +
                    "symbols information_source abc abcd capital_abcd ng ok up cool new free zero one two three four five six seven " +
                    "eight nine keycap_ten 1234 hash asterisk arrow_forward pause_button play_pause stop_button record_button eject " +
                    "track_next track_previous fast_forward rewind arrow_double_up arrow_double_down arrow_backward arrow_up_small " +
                    "arrow_down_small arrow_right arrow_left arrow_up arrow_down arrow_upper_right arrow_lower_right arrow_lower_left " +
                    "arrow_upper_left arrow_up_down left_right_arrow arrow_right_hook leftwards_arrow_with_hook arrow_heading_up " +
                    "arrow_heading_down twisted_rightwards_arrows repeat repeat_one arrows_counterclockwise arrows_clockwise " +
                    "musical_note notes heavy_plus_sign heavy_minus_sign heavy_division_sign heavy_multiplication_x heavy_dollar_sign " +
                    "currency_exchange tm copyright registered wavy_dash curly_loop loop end back on top soon heavy_check_mark " +
                    "ballot_box_with_check radio_button white_circle black_circle red_circle blue_circle small_red_triangle " +
                    "small_red_triangle_down small_orange_diamond small_blue_diamond large_orange_diamond large_blue_diamond " +
                    "white_square_button black_square_button black_small_square white_small_square black_medium_small_square " +
                    "white_medium_small_square black_medium_square white_medium_square black_large_square white_large_square speaker " +
                    "mute sound loud_sound bell no_bell mega loudspeaker speech_left eye_in_speech_bubble speech_balloon thought_balloon " +
                    "anger_right spades clubs hearts diamonds black_joker flower_playing_cards mahjong clock1 clock2 clock3 clock4 clock5 " +
                    "clock6 clock7 clock8 clock9 clock10 clock11 clock12 clock130 clock230 clock330 clock430 clock530 clock630 " +
                    "clock730 clock830 clock930 clock1030 clock1130 clock1230"
                },

                flags: {
                    icon: "flag_gb",
                    title: "Flags",
                    emoji: "flag_white flag_black checkered_flag triangular_flag_on_post rainbow_flag flag_af flag_ax flag_al flag_dz flag_as " +
                    "flag_ad flag_ao flag_ai flag_aq flag_ag flag_ar flag_am flag_aw flag_au flag_at flag_az flag_bs flag_bh flag_bd flag_bb " +
                    "flag_by flag_be flag_bz flag_bj flag_bm flag_bt flag_bo flag_ba flag_bw flag_br flag_io flag_vg flag_bn flag_bg flag_bf " +
                    "flag_bi flag_kh flag_cm flag_ca flag_ic flag_cv flag_bq flag_ky flag_cf flag_td flag_cl flag_cn flag_cx flag_cc flag_co " +
                    "flag_km flag_cg flag_cd flag_ck flag_cr flag_ci flag_hr flag_cu flag_cw flag_cy flag_cz flag_dk flag_dj flag_dm flag_do " +
                    "flag_ec flag_eg flag_sv flag_gq flag_er flag_ee flag_et flag_eu flag_fk flag_fo flag_fj flag_fi flag_fr flag_gf flag_pf " +
                    "flag_tf flag_ga flag_gm flag_ge flag_de flag_gh flag_gi flag_gr flag_gl flag_gd flag_gp flag_gu flag_gt flag_gg flag_gn " +
                    "flag_gw flag_gy flag_ht flag_hn flag_hk flag_hu flag_is flag_in flag_id flag_ir flag_iq flag_ie flag_im flag_il flag_it " +
                    "flag_jm flag_jp crossed_flags flag_je flag_jo flag_kz flag_ke flag_ki flag_xk flag_kw flag_kg flag_la flag_lv flag_lb " +
                    "flag_ls flag_lr flag_ly flag_li flag_lt flag_lu flag_mo flag_mk flag_mg flag_mw flag_my flag_mv flag_ml flag_mt flag_mh " +
                    "flag_mq flag_mr flag_mu flag_yt flag_mx flag_fm flag_md flag_mc flag_mn flag_me flag_ms flag_ma flag_mz flag_mm flag_na " +
                    "flag_nr flag_np flag_nl flag_nc flag_nz flag_ni flag_ne flag_ng flag_nu flag_nf flag_kp flag_mp flag_no flag_om flag_pk " +
                    "flag_pw flag_ps flag_pa flag_pg flag_py flag_pe flag_ph flag_pn flag_pl flag_pt flag_pr flag_qa flag_re flag_ro flag_ru " +
                    "flag_rw flag_ws flag_sm flag_st flag_sa flag_sn flag_rs flag_sc flag_sl flag_sg flag_sx flag_sk flag_si flag_gs flag_sb " +
                    "flag_so flag_za flag_kr flag_ss flag_es flag_lk flag_bl flag_sh flag_kn flag_lc flag_pm flag_vc flag_sd flag_sr flag_sz " +
                    "flag_se flag_ch flag_sy flag_tw flag_tj flag_tz flag_th flag_tl flag_tg flag_tk flag_to flag_tt flag_tn flag_tr flag_tm " +
                    "flag_tc flag_tv flag_vi flag_ug flag_ua flag_ae flag_gb flag_us flag_uy flag_uz flag_vu flag_va flag_ve flag_vn flag_wf " +
                    "flag_eh flag_ye flag_zm flag_zw flag_ac flag_ta flag_bv flag_hm flag_sj flag_um flag_ea flag_cp flag_dg flag_mf " +
                    "united_nations england scotland wales"
                }
            };
        } else {
            defaultOptions.filters = {
                tones: {
                    title: "Diversity",
                    emoji: "santa runner surfer swimmer lifter ear nose point_up_2 point_down point_left point_right punch " +
                    "wave ok_hand thumbsup thumbsdown clap open_hands boy girl man woman cop bride_with_veil person_with_blond_hair " +
                    "man_with_gua_pi_mao man_with_turban older_man grandma baby construction_worker princess angel " +
                    "information_desk_person guardsman dancer nail_care massage haircut muscle spy hand_splayed middle_finger " +
                    "vulcan no_good ok_woman bow raising_hand raised_hands person_frowning person_with_pouting_face pray rowboat " +
                    "bicyclist mountain_bicyclist walking bath metal point_up basketball_player fist raised_hand v writing_hand"
                },

                recent: {
                    icon: "clock3",
                    title: "Recent",
                    emoji: ""
                },

                smileys_people: {
                    icon: "yum",
                    title: "Smileys & People",
                    emoji: "grinning grimacing grin joy smiley smile sweat_smile laughing innocent wink blush slight_smile " +
                    "upside_down relaxed yum relieved heart_eyes kissing_heart kissing kissing_smiling_eyes " +
                    "kissing_closed_eyes stuck_out_tongue_winking_eye stuck_out_tongue_closed_eyes stuck_out_tongue " +
                    "money_mouth nerd sunglasses hugging smirk no_mouth neutral_face expressionless unamused rolling_eyes " +
                    "thinking flushed disappointed worried angry rage pensive confused slight_frown frowning2 persevere " +
                    "confounded tired_face weary triumph open_mouth scream fearful cold_sweat hushed frowning anguished " +
                    "cry disappointed_relieved sleepy sweat sob dizzy_face astonished zipper_mouth mask thermometer_face " +
                    "head_bandage sleeping zzz poop smiling_imp imp japanese_ogre japanese_goblin skull ghost alien robot " +
                    "smiley_cat smile_cat joy_cat heart_eyes_cat smirk_cat kissing_cat scream_cat crying_cat_face " +
                    "pouting_cat raised_hands clap wave thumbsup thumbsdown punch fist v ok_hand raised_hand open_hands " +
                    "muscle pray point_up point_up_2 point_down point_left point_right middle_finger hand_splayed metal " +
                    "vulcan writing_hand nail_care lips tongue ear nose eye eyes bust_in_silhouette busts_in_silhouette " +
                    "speaking_head baby boy girl man woman person_with_blond_hair older_man older_woman man_with_gua_pi_mao " +
                    "man_with_turban cop construction_worker guardsman spy santa angel princess bride_with_veil walking " +
                    "runner dancer dancers couple two_men_holding_hands two_women_holding_hands bow information_desk_person " +
                    "no_good ok_woman raising_hand person_with_pouting_face person_frowning haircut massage couple_with_heart " +
                    "couple_ww couple_mm couplekiss kiss_ww kiss_mm family family_mwg family_mwgb family_mwbb family_mwgg " +
                    "family_wwb family_wwg family_wwgb family_wwbb family_wwgg family_mmb family_mmg family_mmgb family_mmbb " +
                    "family_mmgg womans_clothes shirt jeans necktie dress bikini kimono lipstick kiss footprints high_heel " +
                    "sandal boot mans_shoe athletic_shoe womans_hat tophat helmet_with_cross mortar_board crown school_satchel " +
                    "pouch purse handbag briefcase eyeglasses dark_sunglasses ring closed_umbrella"
                },

                animals_nature: {
                    icon: "hamster",
                    title: "Animals & Nature",
                    emoji: "dog cat mouse hamster rabbit bear panda_face koala tiger lion_face cow pig pig_nose frog " +
                    "octopus monkey_face see_no_evil hear_no_evil speak_no_evil monkey chicken penguin bird baby_chick " +
                    "hatching_chick hatched_chick wolf boar horse unicorn bee bug snail beetle ant spider scorpion crab " +
                    "snake turtle tropical_fish fish blowfish dolphin whale whale2 crocodile leopard tiger2 water_buffalo " +
                    "ox cow2 dromedary_camel camel elephant goat ram sheep racehorse pig2 rat mouse2 rooster turkey dove " +
                    "dog2 poodle cat2 rabbit2 chipmunk feet dragon dragon_face cactus christmas_tree evergreen_tree " +
                    "deciduous_tree palm_tree seedling herb shamrock four_leaf_clover bamboo tanabata_tree leaves " +
                    "fallen_leaf maple_leaf ear_of_rice hibiscus sunflower rose tulip blossom cherry_blossom bouquet " +
                    "mushroom chestnut jack_o_lantern shell spider_web earth_americas earth_africa earth_asia full_moon " +
                    "waning_gibbous_moon last_quarter_moon waning_crescent_moon new_moon waxing_crescent_moon " +
                    "first_quarter_moon waxing_gibbous_moon new_moon_with_face full_moon_with_face first_quarter_moon_with_face " +
                    "last_quarter_moon_with_face sun_with_face crescent_moon star star2 dizzy sparkles comet sunny " +
                    "white_sun_small_cloud partly_sunny white_sun_cloud white_sun_rain_cloud cloud cloud_rain " +
                    "thunder_cloud_rain cloud_lightning zap fire boom snowflake cloud_snow snowman2 snowman wind_blowing_face " +
                    "dash cloud_tornado fog umbrella2 umbrella droplet sweat_drops ocean"
                },

                food_drink: {
                    icon: "pizza",
                    title: "Food & Drink",
                    emoji: "green_apple apple pear tangerine lemon banana watermelon grapes strawberry melon cherries peach " +
                    "pineapple tomato eggplant hot_pepper corn sweet_potato honey_pot bread cheese poultry_leg meat_on_bone " +
                    "fried_shrimp egg hamburger fries hotdog pizza spaghetti taco burrito ramen stew fish_cake sushi bento " +
                    "curry rice_ball rice rice_cracker oden dango shaved_ice ice_cream icecream cake birthday custard candy " +
                    "lollipop chocolate_bar popcorn doughnut cookie beer beers wine_glass cocktail tropical_drink champagne " +
                    "sake tea coffee baby_bottle fork_and_knife fork_knife_plate"
                },

                activity: {
                    icon: "basketball",
                    title: "Activity",
                    emoji: "soccer basketball football baseball tennis volleyball rugby_football 8ball golf golfer ping_pong " +
                    "badminton hockey field_hockey cricket ski skier snowboarder ice_skate bow_and_arrow fishing_pole_and_fish " +
                    "rowboat swimmer surfer bath basketball_player lifter bicyclist mountain_bicyclist horse_racing levitate " +
                    "trophy running_shirt_with_sash medal military_medal reminder_ribbon rosette ticket tickets performing_arts " +
                    "art circus_tent microphone headphones musical_score musical_keyboard saxophone trumpet guitar violin " +
                    "clapper video_game space_invader dart game_die slot_machine bowling"
                },

                travel_places: {
                    icon: "rocket",
                    title: "Travel & Places",
                    emoji: "red_car taxi blue_car bus trolleybus race_car police_car ambulance fire_engine minibus truck " +
                    "articulated_lorry tractor motorcycle bike rotating_light oncoming_police_car oncoming_bus " +
                    "oncoming_automobile oncoming_taxi aerial_tramway mountain_cableway suspension_railway railway_car " +
                    "train monorail bullettrain_side bullettrain_front light_rail mountain_railway steam_locomotive train2 " +
                    "metro tram station helicopter airplane_small airplane airplane_departure airplane_arriving sailboat " +
                    "motorboat speedboat ferry cruise_ship rocket satellite_orbital seat anchor construction fuelpump busstop " +
                    "vertical_traffic_light traffic_light checkered_flag ship ferris_wheel roller_coaster carousel_horse " +
                    "construction_site foggy tokyo_tower factory fountain rice_scene mountain mountain_snow mount_fuji volcano " +
                    "japan camping tent park motorway railway_track sunrise sunrise_over_mountains desert beach island " +
                    "city_sunset city_dusk cityscape night_with_stars bridge_at_night milky_way stars sparkler fireworks " +
                    "rainbow homes european_castle japanese_castle stadium statue_of_liberty house house_with_garden " +
                    "house_abandoned office department_store post_office european_post_office hospital bank hotel " +
                    "convenience_store school love_hotel wedding classical_building church mosque synagogue kaaba shinto_shrine"
                },

                objects: {
                    icon: "bulb",
                    title: "Objects",
                    emoji: "watch iphone calling computer keyboard desktop printer mouse_three_button trackball joystick " +
                    "compression minidisc floppy_disk cd dvd vhs camera camera_with_flash video_camera movie_camera projector " +
                    "film_frames telephone_receiver telephone pager fax tv radio microphone2 level_slider control_knobs " +
                    "stopwatch timer alarm_clock clock hourglass_flowing_sand hourglass satellite battery electric_plug bulb " +
                    "flashlight candle wastebasket oil money_with_wings dollar yen euro pound moneybag credit_card gem scales " +
                    "wrench hammer hammer_pick tools pick nut_and_bolt gear chains gun bomb knife dagger crossed_swords shield " +
                    "smoking skull_crossbones coffin urn amphora crystal_ball prayer_beads barber alembic telescope microscope " +
                    "hole pill syringe thermometer label bookmark toilet shower bathtub key key2 couch sleeping_accommodation " +
                    "bed door bellhop frame_photo map beach_umbrella moyai shopping_bags balloon flags ribbon gift confetti_ball " +
                    "tada dolls wind_chime crossed_flags izakaya_lantern envelope envelope_with_arrow incoming_envelope e-mail " +
                    "love_letter postbox mailbox_closed mailbox mailbox_with_mail mailbox_with_no_mail package postal_horn " +
                    "inbox_tray outbox_tray scroll page_with_curl bookmark_tabs bar_chart chart_with_upwards_trend " +
                    "chart_with_downwards_trend page_facing_up date calendar calendar_spiral card_index card_box ballot_box " +
                    "file_cabinet clipboard notepad_spiral file_folder open_file_folder dividers newspaper2 newspaper notebook " +
                    "closed_book green_book blue_book orange_book notebook_with_decorative_cover ledger books book link " +
                    "paperclip paperclips scissors triangular_ruler straight_ruler pushpin round_pushpin triangular_flag_on_post " +
                    "flag_white flag_black closed_lock_with_key lock unlock lock_with_ink_pen pen_ballpoint pen_fountain " +
                    "black_nib pencil pencil2 crayon paintbrush mag mag_right"
                },

                symbols: {
                    icon: "heartpulse",
                    title: "Symbols",
                    emoji: "heart yellow_heart green_heart blue_heart purple_heart broken_heart heart_exclamation two_hearts " +
                    "revolving_hearts heartbeat heartpulse sparkling_heart cupid gift_heart heart_decoration peace cross " +
                    "star_and_crescent om_symbol wheel_of_dharma star_of_david six_pointed_star menorah yin_yang orthodox_cross " +
                    "place_of_worship ophiuchus aries taurus gemini cancer leo virgo libra scorpius sagittarius capricorn " +
                    "aquarius pisces id atom u7a7a u5272 radioactive biohazard mobile_phone_off vibration_mode u6709 u7121 " +
                    "u7533 u55b6 u6708 eight_pointed_black_star vs accept white_flower ideograph_advantage secret congratulations " +
                    "u5408 u6e80 u7981 a b ab cl o2 sos no_entry name_badge no_entry_sign x o anger hotsprings no_pedestrians " +
                    "do_not_litter no_bicycles non-potable_water underage no_mobile_phones exclamation grey_exclamation question " +
                    "grey_question bangbang interrobang 100 low_brightness high_brightness trident fleur-de-lis part_alternation_mark " +
                    "warning children_crossing beginner recycle u6307 chart sparkle eight_spoked_asterisk negative_squared_cross_mark " +
                    "white_check_mark diamond_shape_with_a_dot_inside cyclone loop globe_with_meridians m atm sa passport_control " +
                    "customs baggage_claim left_luggage wheelchair no_smoking wc parking potable_water mens womens baby_symbol " +
                    "restroom put_litter_in_its_place cinema signal_strength koko ng ok up cool new free zero one two three four " +
                    "five six seven eight nine ten 1234 arrow_forward pause_button play_pause stop_button record_button track_next " +
                    "track_previous fast_forward rewind twisted_rightwards_arrows repeat repeat_one arrow_backward arrow_up_small " +
                    "arrow_down_small arrow_double_up arrow_double_down arrow_right arrow_left arrow_up arrow_down arrow_upper_right " +
                    "arrow_lower_right arrow_lower_left arrow_upper_left arrow_up_down left_right_arrow arrows_counterclockwise " +
                    "arrow_right_hook leftwards_arrow_with_hook arrow_heading_up arrow_heading_down hash asterisk information_source " +
                    "abc abcd capital_abcd symbols musical_note notes wavy_dash curly_loop heavy_check_mark arrows_clockwise " +
                    "heavy_plus_sign heavy_minus_sign heavy_division_sign heavy_multiplication_x heavy_dollar_sign currency_exchange " +
                    "copyright registered tm end back on top soon ballot_box_with_check radio_button white_circle black_circle " +
                    "red_circle large_blue_circle small_orange_diamond small_blue_diamond large_orange_diamond large_blue_diamond " +
                    "small_red_triangle black_small_square white_small_square black_large_square white_large_square small_red_triangle_down " +
                    "black_medium_square white_medium_square black_medium_small_square white_medium_small_square black_square_button " +
                    "white_square_button speaker sound loud_sound mute mega loudspeaker bell no_bell black_joker mahjong spades " +
                    "clubs hearts diamonds flower_playing_cards thought_balloon anger_right speech_balloon clock1 clock2 clock3 " +
                    "clock4 clock5 clock6 clock7 clock8 clock9 clock10 clock11 clock12 clock130 clock230 clock330 clock430 " +
                    "clock530 clock630 clock730 clock830 clock930 clock1030 clock1130 clock1230 eye_in_speech_bubble"
                },

                flags: {
                    icon: "flag_gb",
                    title: "Flags",
                    emoji: "ac af al dz ad ao ai ag ar am aw au at az bs bh bd bb by be bz bj bm bt bo ba bw br bn bg bf bi " +
                    "cv kh cm ca ky cf td flag_cl cn co km cg flag_cd cr hr cu cy cz dk dj dm do ec eg sv gq er ee et fk fo " +
                    "fj fi fr pf ga gm ge de gh gi gr gl gd gu gt gn gw gy ht hn hk hu is in flag_id ir iq ie il it ci jm jp " +
                    "je jo kz ke ki xk kw kg la lv lb ls lr ly li lt lu mo mk mg mw my mv ml mt mh mr mu mx fm md mc mn me " +
                    "ms ma mz mm na nr np nl nc nz ni ne flag_ng nu kp no om pk pw ps pa pg py pe ph pl pt pr qa ro ru rw " +
                    "sh kn lc vc ws sm st flag_sa sn rs sc sl sg sk si sb so za kr es lk sd sr sz se ch sy tw tj tz th tl " +
                    "tg to tt tn tr flag_tm flag_tm ug ua ae gb us vi uy uz vu va ve vn wf eh ye zm zw re ax ta io bq cx " +
                    "cc gg im yt nf pn bl pm gs tk bv hm sj um ic ea cp dg as aq vg ck cw eu gf tf gp mq mp sx ss tc "
                }
            };
        };

        return defaultOptions;
    };
});
