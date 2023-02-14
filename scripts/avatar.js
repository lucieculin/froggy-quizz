const skins = ["ffdbb4", "edb98a", "fd9841", "fcee93", "d08b5b", "ae5d29", "614335"];
let eyes = ["default", "dizzy", "eyeroll", "happy", "close", "hearts", "side", "wink", "squint", "surprised", "winkwacky", "cry"];
let eyebrows = ["default", "default2", "raised", "sad", "sad2", "unibrow", "updown", "updown2", "angry", "angry2"];
let mouths = ["default", "twinkle", "tongue", "smile", "serious", "scream", "sad", "grimace", "eating", "disbelief", "concerned", "vomit"];
let hairstyles = ["bold", "longhair", "longhairbob", "hairbun", "longhaircurly", "longhaircurvy", "longhairdread", "nottoolong", "miawallace", "longhairstraight", "longhairstraight2", "shorthairdreads", "shorthairdreads2", "shorthairfrizzle", "shorthairshaggy", "shorthaircurly", "shorthairflat", "shorthairround", "shorthairwaved", "shorthairsides"];
let haircolors = ["bb7748_9a4f2b_6f2912", "404040_262626_101010", "c79d63_ab733e_844713", "e1c68e_d0a964_b88339", "906253_663d32_3b1d16", "f8afaf_f48a8a_ed5e5e", "f1e6cf_e9d8b6_dec393", "d75324_c13215_a31608", "59a0ff_3777ff_194bff"];
let facialhairs = ["none", "magnum", "fancy", "magestic", "light"];
let clothes = ["vneck", "sweater", "hoodie", "overall", "blazer"];
let fabriccolors = ["545454", "65c9ff", "5199e4", "25557c", "e6e6e6", "929598", "a7ffc4", "ffdeb5", "ffafb9", "ffffb1", "ff5c5c", "e3adff"];
let backgroundcolors = ["ffffff", "f5f6eb", "e5fde2", "d5effd", "d1d0fc", "f7d0fc", "d0d0d0"];
let glasses = ["none", "rambo", "fancy", "old", "nerd", "fancy2", "harry"];
let glassopacities = ["10", "25", "50", "75", "100"];
let tattoos = ["non", "harry", "airbender", "krilin", "front", "tribal", "tribal2", "throat"];
let accesories = ["none", "earphones", "earring1", "earring2", "earring3"];
let current_skincolor = "edb98a";
let current_hairstyle = "longhair";
let current_haircolor = "bb7748_9a4f2b_6f2912";
let current_fabriccolors = "545454";
let current_backgroundcolors = "ffffff";
let current_glassopacity = 0.5;
$(document).ready(function () {
    $("body").delegate("#menu_list button", "click", function () {
        let idx = $(this).attr("id");
        if (idx === "download") {
            let current_eyes;
            $("#eyes g").each(function () {
                if ($(this).css("display") === "inline") {
                    id = $(this).attr("id");
                    current_eyes = id.substr(2);
                }
            });
            let current_eyebrows;
            $("#eyebrows g").each(function () {
                if ($(this).css("display") === "inline") {
                    id = $(this).attr("id");
                    current_eyebrows = id.substr(3);
                }
            });
            let current_mouth;
            $("#mouths g").each(function () {
                if ($(this).css("display") === "inline") {
                    id = $(this).attr("id");
                    current_mouth = id.substr(2);
                }
            });
            let current_facialhair = "none";
            $("#facialhair g").each(function () {
                if ($(this).css("display") === "inline") {
                    id = $(this).attr("id");
                    current_facialhair = id.substr(2);
                }
            });
            let current_clothe;
            $("#clothes g").each(function () {
                if ($(this).css("display") === "inline") {
                    id = $(this).attr("id");
                    current_clothe = id.substr(2);
                }
            });
            let current_glasses = "none";
            $("#glasses g").each(function () {
                if ($(this).css("display") === "inline") {
                    id = $(this).attr("id");
                    current_glasses = id.substr(2);
                }
            });
            let current_tattoos = "none";
            $("#tattoos g").each(function () {
                if ($(this).css("display") === "inline") {
                    id = $(this).attr("id");
                    current_tattoos = id.substr(2);
                }
            });
            let current_accesories = "none";
            $("#accesories g").each(function () {
                if ($(this).css("display") === "inline") {
                    id = $(this).attr("id");
                    current_accesories = id.substr(2);
                }
            });
            let url = "https://vitruvianman.000webhostapp.com/avatarmaker/avatar.php?skincolor=" + current_skincolor;
            url += "&hairstyle=" + current_hairstyle;
            url += "&haircolor=" + current_haircolor;
            url += "&fabriccolors=" + current_fabriccolors;
            url += "&eyes=" + current_eyes;
            url += "&eyebrows=" + current_eyebrows;
            url += "&mouth=" + current_mouth;
            url += "&facialhair=" + current_facialhair;
            url += "&clothe=" + current_clothe;
            url += "&backgroundcolor=" + current_backgroundcolors;
            url += "&glasses=" + current_glasses;
            url += "&glassopacity=" + current_glassopacity;
            url += "&tattoos=" + current_tattoos;
            url += "&accesories=" + current_accesories;
            window.open(url);
        } else {
            let selected = $(this).html();
            $("#options_title").html("SELECT " + selected);
            $("#options_div").html("");
            let html = "";
            switch (idx) {
                case "skincolor":
                    for (let i = 0; i < skins.length; i++) {
                        skin = skins[i];
                        html += "<div Class='skins' id='s_" + skin + "' style='background-color:#" + skin + ";'></div>";
                    }
                    break;
                case "eyes":
                    for (i = 0; i < eyes.length; i++) {
                        eye = eyes[i];
                        html += "<div Class='eyes' id='e_" + eye + "' style='background-color:#" + current_skincolor + ";background-position:" + (i * -53) + "px 0px;'></div>";
                    }
                    break;
                case "eyebrows":
                    for (i = 0; i < eyebrows.length; i++) {
                        eyebrow = eyebrows[i];
                        html += "<div Class='eyebrows' id='eb_" + eyebrow + "' style='background-color:#" + current_skincolor + ";background-position:" + (i * -53) + "px -53px;'></div>";
                    }
                    break;
                case "mouths":
                    for (i = 0; i < mouths.length; i++) {
                        mouth = mouths[i];
                        html += "<div Class='mouths' id='m_" + mouth + "' style='background-color:#" + current_skincolor + ";background-position:" + (i * -53) + "px -106px;'></div>";
                    }
                    break;
                case "hairstyles":
                    for (i = 0; i < hairstyles.length; i++) {
                        hairstyle = hairstyles[i];
                        html += "<div Class='hairstyles' id='h_" + hairstyle + "' style='background-color:#ffffff;background-position:" + (i * -53) + "px -159px;'></div>";
                    }
                    break;
                case "haircolors":
                    for (i = 0; i < haircolors.length; i++) {
                        haircolor = haircolors[i];
                        haircolor_front = haircolor.split("_");
                        html += "<div Class='haircolors' id='hc_" + haircolor + "' style='background-color:#" + haircolor_front[0] + ";'></div>";
                    }
                    break;
                case "facialhairs":
                    for (i = 0; i < facialhairs.length; i++) {
                        facialhair = facialhairs[i];
                        haircolor_front = facialhair.split("_");
                        html += "<div Class='facialhairs' id='f_" + facialhair + "' style='background-color:#ffffff;background-position:" + (i * -53) + "px -212px;'></div>";
                    }
                    break;
                case "clothes":
                    for (let i = 0; i < clothes.length; i++) {
                        clothe = clothes[i];
                        html += "<div Class='clothes' id='c_" + clothe + "' style='background-color:#ffffff;background-position:" + (i * -53) + "px -265px;'></div>";
                    }
                    break;
                case "fabriccolors":
                    for (let i = 0; i < fabriccolors.length; i++) {
                        fabriccolor = fabriccolors[i];
                        html += "<div Class='fabriccolors' id='f_" + fabriccolor + "' style='background-color:#" + fabriccolor + ";'></div>";
                    }
                    break;
                case "backgroundcolors":
                    for (let i = 0; i < backgroundcolors.length; i++) {
                        backgroundcolor = backgroundcolors[i];
                        html += "<div Class='backgroundcolors' id='g_" + backgroundcolor + "' style='background-color:#" + backgroundcolor + ";'></div>";
                    }
                    break;
                case "glasses":
                    for (let i = 0; i < glasses.length; i++) {
                        glass = glasses[i];
                        html += "<div Class='glasses' id='g_" + glass + "' style='background-color:#ffffff;background-position:" + (i * -53) + "px -313px;'></div>";
                    }
                    break;
                case "glassopacity":
                    for (let i = 0; i < glassopacities.length; i++) {
                        glassopacity = glassopacities[i];
                        html += "<div Class='glassopacity' id='o_" + glassopacity + "' style='background-color:#ffffff;'>" + glassopacity + "%</div>";
                    }
                    break;
                case "tattoos":
                    for (let i = 0; i < tattoos.length; i++) {
                        tattoo = tattoos[i];
                        html += "<div Class='tattoos' id='t_" + tattoo + "' style='background-color:#ffffff;background-position:" + (i * -53) + "px -419px;'></div>";
                    }
                    break;
                case "accesories":
                    for (let i = 0; i < accesories.length; i++) {
                        accesory = accesories[i];
                        html += "<div Class='accesories' id='a_" + accesory + "' style='background-color:#ffffff;background-position:" + (i * -53) + "px -369px;'></div>";
                    }
                    break;
            }
            $("#options_div").html(html);
            $("#menu_lines").click();
        }
    });
    $("body").delegate("#random", "click", function () {
        random();
    });
    $("body").delegate("#menu_lines", "click", function () {
        menu_class = $("#menu").attr("Class");
        if (menu_class === "") {
            $("#menu").addClass("active");
            $("#menu").css({
                "border": "0px"
            });
            $("#menu").stop().animate({
                "width": "360px"
            }, {
                duration: 300,
                complete: function () {
                    $(this).stop().animate({
                        "height": "460px"
                    }, {
                        duration: 300,
                    });
                }
            });
        } else {
            $("#menu").removeClass("active");
            $("#menu").css({
                "border-right": "1px solid #707070"
            });
            $("#menu").stop().animate({
                "height": "99px"
            }, {
                duration: 300,
                complete: function () {
                    $(this).stop().animate({
                        "width": "60px"
                    }, {
                        duration: 300,
                    });
                }
            });
        }
    });
    $("body").delegate(".skins", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        current_skincolor = id;
        $("#skin #body").attr("fill", "#" + id);
    });
    $("body").delegate(".eyes", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        $("#eyes g").hide();
        $("#eyes #e_" + id).show();
    });
    $("body").delegate(".eyebrows", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(3);
        $("#eyebrows g").hide();
        $("#eyebrows #eb_" + id).show();
    });
    $("body").delegate(".mouths", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        $("#mouths g").hide();
        $("#mouths #m_" + id).show();
    });
    $("body").delegate(".hairstyles", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        current_hairstyle = id;
        $("#hair_front g").hide();
        $("#hair_back g").hide();
        $("#hair_front .h_" + id).show();
        $("#hair_back .h_" + id).show();
        let color = current_haircolor;
        color = color.split("_");
        $("#hair_front .h_" + current_hairstyle + " .tinted").attr("fill", "#" + color[0]);
        $("#hair_back .h_" + current_hairstyle + " .tinted").attr("fill", "#" + color[1]);
        $("#facialhair g .tinted").attr("fill", "#" + color[2]);
    });
    $("body").delegate(".haircolors", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(3);
        current_haircolor = id;
        id = id.split("_");
        $("#hair_front .h_" + current_hairstyle + " .tinted").attr("fill", "#" + id[0]);
        $("#hair_back .h_" + current_hairstyle + " .tinted").attr("fill", "#" + id[1]);
        $("#facialhair g .tinted").attr("fill", "#" + id[2]);
    });
    $("body").delegate(".facialhairs", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        $("#facialhair g").hide();
        $("#facialhair #f_" + id).show();
    });
    $("body").delegate(".clothes", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        $("#clothes g").hide();
        $("#clothes #c_" + id).show();
    });
    $("body").delegate(".fabriccolors", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        current_fabriccolors = id;
        $("#clothes g .tinted").attr("fill", "#" + id);
    });
    $("body").delegate(".backgroundcolors", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        current_backgroundcolors = id;
        $("#background").attr("fill", "#" + id);
    });
    $("body").delegate(".glasses", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        $("#glasses g").hide();
        $("#glasses #g_" + id).show();
    });
    $("body").delegate(".glassopacity", "click", function () {
        let id = $(this).attr("id");
        id = parseInt(id.substr(2));
        current_glassopacity = id / 100;
        $(".glass").attr("fill-opacity", current_glassopacity);
    });
    $("body").delegate(".tattoos", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        $("#tattoos g").hide();
        $("#tattoos #t_" + id).show();
    });
    $("body").delegate(".accesories", "click", function () {
        let id = $(this).attr("id");
        id = id.substr(2);
        $("#accesories g").hide();
        $("#accesories #a_" + id).show();
    });
    random();
})

function random() {
    let rand_skins = skins[Math.floor(Math.random() * skins.length)];
    let rand_eyes = eyes[Math.floor(Math.random() * eyes.length)];
    let rand_eyebrows = eyebrows[Math.floor(Math.random() * eyebrows.length)];
    let rand_mouths = mouths[Math.floor(Math.random() * mouths.length)];
    let rand_hairstyles = hairstyles[Math.floor(Math.random() * hairstyles.length)];
    let rand_haircolors = haircolors[Math.floor(Math.random() * haircolors.length)];
    let rand_facialhairs = facialhairs[Math.floor(Math.random() * facialhairs.length)];
    let rand_clothes = clothes[Math.floor(Math.random() * clothes.length)];
    let rand_fabriccolors = fabriccolors[Math.floor(Math.random() * fabriccolors.length)];
    let rand_backgroundcolors = backgroundcolors[Math.floor(Math.random() * backgroundcolors.length)];
    let rand_glasses = glasses[Math.floor(Math.random() * glasses.length)];
    let rand_glassopacities = parseInt(glassopacities[Math.floor(Math.random() * glassopacities.length)]) / 100;
    let rand_tattoos = tattoos[Math.floor(Math.random() * tattoos.length)];
    let rand_accesories = accesories[Math.floor(Math.random() * accesories.length)];
    current_skincolor = rand_skins;
    current_fabriccolors = rand_fabriccolors;
    current_backgroundcolors = rand_backgroundcolors;
    current_glassopacity = rand_glassopacities;
    $("#skin #body").attr("fill", "#" + rand_skins);
    $("#eyes g").hide();
    $("#eyes #e_" + rand_eyes).show();
    $("#eyebrows g").hide();
    $("#eyebrows #eb_" + rand_eyebrows).show();
    $("#mouths g").hide();
    $("#mouths #m_" + rand_mouths).show();
    current_hairstyle = rand_hairstyles;
    $("#hair_front g").hide();
    $("#hair_back g").hide();
    $("#hair_front .h_" + rand_hairstyles).show();
    $("#hair_back .h_" + rand_hairstyles).show();
    current_haircolor = rand_haircolors;
    let color = current_haircolor;
    color = color.split("_");
    $("#hair_front .h_" + current_hairstyle + " .tinted").attr("fill", "#" + color[0]);
    $("#hair_back .h_" + current_hairstyle + " .tinted").attr("fill", "#" + color[1]);
    $("#facialhair g .tinted").attr("fill", "#" + color[2]);
    $("#facialhair g").hide();
    $("#facialhair #f_" + rand_facialhairs).show();
    $("#clothes g").hide();
    $("#clothes #c_" + rand_clothes).show();
    $("#glasses g").hide();
    $("#glasses #g_" + rand_glasses).show();
    $(".glass").attr("fill-opacity", rand_glassopacities);
    $("#clothes g .tinted").attr("fill", "#" + rand_fabriccolors);
    $("#background").attr("fill", "#" + rand_backgroundcolors);
    $("#tattoos g").hide();
    $("#tattoos #t_" + rand_tattoos).show();
    $("#accesories g").hide();
    $("#accesories #a_" + rand_accesories).show();
}