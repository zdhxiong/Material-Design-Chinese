# 新版翻译已开始，一起来翻译吧

我已经把文档整理成了 Markdown 格式，并把英文原文以注释的形式保留在了 Markdown 文件中，方便进行逐行对照翻译。

## 如何参与翻译

1. fork 主仓库
2. 在 `README.md` 的 “待认领的文件” 下面选择一个你想认领的文件，将其剪贴到 “翻译中的文件”下面，并在文件名后面写上 (@你的github名)，给主仓库的 `v2` 分支提 pull request
3. 提的 pull request 被确认，合并到主仓库后，代表你已认领完成，可以开始翻译。认领完成后，请在 5 天内完成翻译并提交 pull request，否则我会认为你已放弃翻译，会将该文件重新移回到 “待认领的文件”中。
4. 翻译完成后，提交 pull request 给主仓库的 `v2` 分支
5. 校验人员可能会给你的翻译提出一些意见，你需要按修改意见进行修改。待 pull request 被合并后，代表该文件翻译完成

## 如何生成文档

我们使用 PHP 来生成最终的 HTML 文件，生成的文件位于 dist 目录中。

注意：提交翻译时，只需提交 src 目录中的文件即可，无需提交 dist 目录。

```
# 进入 build 目录
cd build
# 安装依赖
composer install
# 生成 HTML 文件
php build.php
```

## 待认领的文件

* src/components/backdrop.md
* src/components/banners.md
* src/components/bottom-navigation.md
* src/components/buttons.md
* src/components/buttons-floating-action-button.md
* src/components/cards.md
* src/components/chips.md
* src/components/data-tables.md
* src/components/dialogs.md
* src/components/dividers.md
* src/components/image-lists.md
* src/components/lists.md
* src/components/menus.md
* src/components/navigation-drawer.md
* src/components/progress-indicators.md
* src/components/selection-controls.md
* src/components/sheets-bottom.md
* src/components/sheets-side.md
* src/components/sliders.md
* src/components/snackbars.md
* src/components/tabs.md
* src/components/text-fields.md
* src/components/tooltips.md
* src/environment/elevation.md
* src/environment/light-shadows.md
* src/environment/surfaces.md
* src/foundation-overview/index.md
* src/guidelines-overview/index.md
* src/iconography/animated-icons.md
* src/iconography/product-icons.md
* src/iconography/system-icons.md
* src/interaction/gestures.md
* src/interaction/selection.md
* src/interaction/states.md
* src/introduction/index.md
* src/layout/component-behavior.md
* src/layout/density.md
* src/layout/responsive-layout-grid.md
* src/layout/spacing-methods.md
* src/layout/understanding-layout.md
* src/material-studies/about-our-material-studies.md
* src/material-studies/basil.md
* src/material-studies/crane.md
* src/material-studies/fortnightly.md
* src/material-studies/owl.md
* src/material-studies/rally.md
* src/material-studies/reply.md
* src/material-studies/shrine.md
* src/material-theming/implementing-your-theme.md
* src/material-theming/overview.md
* src/motion/choreography.md
* src/motion/customization.md
* src/motion/speed.md
* src/motion/understanding-motion.md
* src/navigation/navigation-transitions.md
* src/navigation/search.md
* src/navigation/understanding-navigation.md
* src/platform-guidance/android-bars.md
* src/platform-guidance/android-fingerprint.md
* src/platform-guidance/android-haptics.md
* src/platform-guidance/android-icons.md
* src/platform-guidance/android-navigating-between-apps.md
* src/platform-guidance/android-notifications.md
* src/platform-guidance/android-permissions.md
* src/platform-guidance/android-settings.md
* src/platform-guidance/android-split-screen.md
* src/platform-guidance/android-swipe-to-refresh.md
* src/platform-guidance/android-text-selection-toolbar.md
* src/platform-guidance/android-widget.md
* src/platform-guidance/cross-platform-adaptation.md

## 翻译中的文件
* src/color/the-color-system.md (@VCEtwp)
* src/typography/language-support.md (@PaperFlu)
* src/typography/the-type-system.md (@PaperFlu)
* src/typography/understanding-typography.md (@PaperFlu)
* src/usability/index.md (@PaperFlu)
* src/components/app-bars-top.md (@zdhxiong)

## 已翻译完成的文件
* src/color/color-usage.md (@zdhxiong)
* src/color/text-legibility.md (@Minoyu)
* src/color/applying-color-to-ui.md (@VCEtwp)
* src/communication/confirmation-acknowledgement.md (@zdhxiong)
* src/communication/data-formats.md (@zdhxiong)
* src/communication/empty-states.md (@zdhxiong)
* src/communication/gesture-education.md (@zdhxiong)
* src/communication/help-feedback.md (@zdhxiong)
* src/communication/imagery.md (@zdhxiong)
* src/communication/launch-screen.md (@zdhxiong)
* src/communication/onboarding.md (@zdhxiong)
* src/communication/writing.md (@zdhxiong)
* src/shape/about-shape.md (@PaperFlu)
* src/shape/shape-as-expression.md (@PaperFlu)
* src/shape/shape-hierarchy.md (@PaperFlu)
* src/shape/shape-motion.md (@PaperFlu)
* src/components/app-bars-bottom.md (@zdhxiong)
