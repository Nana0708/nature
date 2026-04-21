// ハンバーガーメニューの開閉機能
document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".header__hamburger");
  const hamburgerTxt = document.querySelector(".header__hamburger-txt");
  const nav = document.querySelector(".header__nav");
  const info = document.querySelector(".header__info");
  const body = document.body;

  // ハンバーガーメニューの開閉
  if (hamburger && nav && hamburgerTxt && info) {
    hamburger.addEventListener("click", function () {
      // is-openクラスをトグル
      hamburger.classList.toggle("is-open");
      nav.classList.toggle("is-open");

      // MENUとCLOSEの切り替え、infoの表示切り替え
      if (nav.classList.contains("is-open")) {
        hamburgerTxt.textContent = "CLOSE";
        body.style.overflow = "hidden";
        info.style.display = "block";
      } else {
        hamburgerTxt.textContent = "MENU";
        body.style.overflow = "";
        info.style.display = "none";
      }
    });

    // メニュー内のリンクをクリックしたらメニューを閉じる
    const navLinks = document.querySelectorAll(".header__nav-link");
    navLinks.forEach(function (link) {
      link.addEventListener("click", function () {
        hamburger.classList.remove("is-open");
        nav.classList.remove("is-open");
        hamburgerTxt.textContent = "MENU";
        body.style.overflow = "";
        info.style.display = "none";
      });
    });
  }
});
// fvのカードフェードイン

// console.log('main.js読み込まれました');

$(function () {
  const $newsCard = $(".js-fade");

  if ($newsCard.length === 0) {
    console.error(".js-fade要素が見つかりません");
    return;
  }

  // ファーストビューセクション(.fv)の高さを取得
  const $fv = $(".fv");
  let fvHeight;

  if ($fv.length > 0) {
    // .fvセクションがある場合、その高さを基準にする
    // マイナス200pxすることで早めに消える
    fvHeight = $fv.offset().top + $fv.outerHeight() - 200;
    console.log(".fvセクションの判定位置:", fvHeight + "px");
  } else {
    // .fvセクションがない場合、ウィンドウの高さを基準にする
    fvHeight = $(window).height() - 200;
    console.log("ウィンドウの高さ:", fvHeight + "px");
  }

  $(window).on("scroll", function () {
    const scrollTop = $(this).scrollTop();

    // ファーストビューを過ぎたかチェック
    if (scrollTop > fvHeight) {
      $newsCard.addClass("is-hidden");
    } else {
      $newsCard.removeClass("is-hidden");
    }
  });
});

// aboutの画像4枚のフェードイン
// 画像を1枚ずつ時間差でフェードイン
$(window).on("scroll", function () {
  // js-fade1のフェードイン
  $(".js-fade1").each(function () {
    const elemPos = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();

    if (scroll > elemPos - windowHeight + 200) {
      $(this).addClass("is-fade");
    }
  });

  // js-fade2のフェードイン（少し遅延）
  $(".js-fade2").each(function () {
    const elemPos = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();

    if (scroll > elemPos - windowHeight + 200) {
      setTimeout(() => {
        $(this).addClass("is-fade");
      }, 200);
    }
  });

  // js-fade3のフェードイン（さらに遅延）
  $(".js-fade3").each(function () {
    const elemPos = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();

    if (scroll > elemPos - windowHeight + 200) {
      setTimeout(() => {
        $(this).addClass("is-fade");
      }, 400);
    }
  });

  // js-fade4のフェードイン（最も遅延）
  $(".js-fade4").each(function () {
    const elemPos = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();

    if (scroll > elemPos - windowHeight + 200) {
      setTimeout(() => {
        $(this).addClass("is-fade");
      }, 600);
    }
  });
});

$(function () {
  // Slickスライダーの初期化
  $(".work__slider").slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    cssEase: "linear",
    slidesToShow: 3,
    slidesToScroll: 1,
    swipe: false,
    arrows: false,
    infinite: true,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  // タブ切り替え処理
  $(".work__tab").on("click", function () {
    let index = $(this).index();

    // タブボタンの切り替え
    $(".work__tab").removeClass("active");
    $(this).addClass("active");

    // パネルの切り替え
    $(".work__panel").removeClass("active");
    $(".work__panel").eq(index).addClass("active");

    // スライダーの位置調整
    $(".work__slider").slick("setPosition");
  });
});

// アコーディオン
document.addEventListener("DOMContentLoaded", function () {
  const faqToggles = document.querySelectorAll(".faq__toggle");

  faqToggles.forEach((toggle) => {
    toggle.addEventListener("click", function () {
      const isExpanded = this.getAttribute("aria-expanded") === "true";
      const answer = this.closest(".faq__question").nextElementSibling;

      // 他のすべてのアコーディオンを閉じる
      faqToggles.forEach((otherToggle) => {
        if (otherToggle !== this) {
          otherToggle.setAttribute("aria-expanded", "false");
          const otherAnswer =
            otherToggle.closest(".faq__question").nextElementSibling;
          otherAnswer.classList.remove("is-open");
        }
      });

      // クリックされたアコーディオンを開閉
      if (isExpanded) {
        this.setAttribute("aria-expanded", "false");
        answer.classList.remove("is-open");
      } else {
        this.setAttribute("aria-expanded", "true");
        answer.classList.add("is-open");
      }
    });
  });

  // 初期状態: 最初のアイテムだけ開く
  const firstToggle = faqToggles[0];
  if (firstToggle && firstToggle.getAttribute("aria-expanded") === "true") {
    const firstAnswer =
      firstToggle.closest(".faq__question").nextElementSibling;
    firstAnswer.classList.add("is-open");
  }
});

// Contact Form 7のカスタムセレクトボックス
document.addEventListener("DOMContentLoaded", function () {
  // ============================================
  // カスタムセレクトボックスの生成
  // ============================================
  function initCustomSelect() {
    const nativeSelects = document.querySelectorAll(
      ".p-contact__native-select"
    );

    nativeSelects.forEach((nativeSelect) => {
      const wrapper = nativeSelect.closest(".p-contact__custom-select-wrapper");
      if (!wrapper || wrapper.querySelector(".p-contact__custom-select"))
        return; // 既に生成済みならスキップ

      // オプションを取得
      const options = Array.from(nativeSelect.options);
      const selectedIndex = nativeSelect.selectedIndex;
      const selectedText = options[selectedIndex]?.text || "選択してください";
      const selectedValue = options[selectedIndex]?.value || "";

      // カスタムセレクトのHTML生成
      const customSelectHTML = `
        <div class="p-contact__custom-select" data-value="${selectedValue}">
          <div class="p-contact__custom-select-trigger">
            <span class="p-contact__custom-select-text">${selectedText}</span>
          </div>
          <div class="p-contact__custom-select-options">
            ${options
              .map((option, index) => {
                if (index === 0) return ""; // 最初の「選択してください」はスキップ
                return `<div class="p-contact__custom-select-option" data-value="${option.value}">${option.text}</div>`;
              })
              .join("")}
          </div>
        </div>
      `;

      // カスタムセレクトを挿入
      wrapper.insertAdjacentHTML("beforeend", customSelectHTML);

      // イベントリスナーを設定
      setupCustomSelectEvents(wrapper, nativeSelect);
    });
  }

  // ============================================
  // カスタムセレクトのイベント設定
  // ============================================
  function setupCustomSelectEvents(wrapper, nativeSelect) {
    const customSelect = wrapper.querySelector(".p-contact__custom-select");
    const trigger = customSelect.querySelector(
      ".p-contact__custom-select-trigger"
    );
    const textElement = customSelect.querySelector(
      ".p-contact__custom-select-text"
    );
    const options = customSelect.querySelectorAll(
      ".p-contact__custom-select-option"
    );

    // トリガークリック
    trigger.addEventListener("click", function (e) {
      e.stopPropagation();

      // 他のセレクトを閉じる
      document
        .querySelectorAll(".p-contact__custom-select-wrapper")
        .forEach((w) => {
          if (w !== wrapper) {
            w.classList.remove("is-open");
            const cs = w.querySelector(".p-contact__custom-select");
            if (cs) cs.classList.remove("is-open");
          }
        });

      // 現在のセレクトを開閉
      customSelect.classList.toggle("is-open");
      wrapper.classList.toggle("is-open");
    });

    // オプション選択
    options.forEach((option) => {
      option.addEventListener("click", function (e) {
        e.stopPropagation();

        const value = this.getAttribute("data-value");
        const text = this.textContent;

        // 選択状態を更新
        options.forEach((opt) => opt.classList.remove("is-selected"));
        this.classList.add("is-selected");

        // 表示テキストを更新
        textElement.textContent = text;

        // data-value属性を更新
        customSelect.setAttribute("data-value", value);

        // ネイティブselectの値を更新
        nativeSelect.value = value;

        // Changeイベントを発火（Contact Form 7用）
        const event = new Event("change", { bubbles: true });
        nativeSelect.dispatchEvent(event);

        // セレクトを閉じる
        customSelect.classList.remove("is-open");
        wrapper.classList.remove("is-open");
      });
    });
  }

  // 初期化
  initCustomSelect();

  // Contact Form 7のAjax完了後に再初期化
  document.addEventListener("wpcf7mailsent", function () {
    setTimeout(initCustomSelect, 100);
  });

  // ドキュメント全体をクリックしたときにセレクトを閉じる
  document.addEventListener("click", function () {
    document
      .querySelectorAll(".p-contact__custom-select-wrapper")
      .forEach((wrapper) => {
        wrapper.classList.remove("is-open");
        const customSelect = wrapper.querySelector(".p-contact__custom-select");
        if (customSelect) customSelect.classList.remove("is-open");
      });
  });
});

// ============================================
// 確認画面で矢印を非表示
// ============================================
document.addEventListener("DOMContentLoaded", function () {
  // URLに "contact-confirm" が含まれている場合（確認画面）
  if (
    window.location.href.includes("contact-confirm") ||
    window.location.href.includes("confirm")
  ) {
    const wrappers = document.querySelectorAll(
      ".p-contact__custom-select-wrapper"
    );
    wrappers.forEach((wrapper) => {
      wrapper.classList.add("is-confirm-page");
    });
  }
});
