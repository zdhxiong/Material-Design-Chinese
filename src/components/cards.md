<div class="article__intro">

[en]: <> (Cards)
# 译文

[en]: <> (Cards contain content and actions about a single subject.)
译文

<figure>
<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-intro.mp4" src="{assets_path}/components/cards/cards-intro.mp4" type="video/mp4">
</video>
</figure>

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Actions)
[en]: <> (Card collections)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#actions)
* [译文](#card-collections)
* [译文](#theming)
* [译文](#specs)

</nav>

</div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Cards are surfaces that display content and actions on a single topic.)
译文

[en]: <> (They should be easy to scan for relevant and actionable information. Elements, like text and images, should be placed on them in a way that clearly indicates hierarchy.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col">

<figure>

![]({assets_path}/components/cards/illo-cards-intro.png)

<figcaption>

[en]: <> (Contained)
#### 译文

[en]: <> (A card is identifiable as a single, contained unit.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/cards/illo-cards-independent.png)

<figcaption>

[en]: <> (Independent)
#### 译文

[en]: <> (A card can stand alone, without relying on surrounding elements for context.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/cards/illo-cards-cut.png)

<figcaption>

[en]: <> (Individual)
#### 译文

[en]: <> (A card cannot merge with another card, or divide into multiple cards.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

[en]: <> (The card container is the only required element in a card. All other elements shown here are optional.)
译文

[en]: <> (Card layouts can vary to support the types of content they contain. The following elements are commonly found among that variety.)
译文

<figure>

![]({assets_path}/components/cards/cards-elements-2b.png)

<figcaption>

[en]: <> (*Container*<br>Card containers hold all card elements, and their size is determined by the space those elements occupy. Card elevation is expressed by the container.)
[en]: <> (*Thumbnail [optional]*<br>Cards can include thumbnails to display an avatar, logo, or icon.)
[en]: <> (*Header text [optional]*<br>Header text can include things like the name of a photo album or article.)
[en]: <> (*Subhead [optional]*<br>Subhead text can include text elements such as an article byline or a tagged location.)
[en]: <> (*Media [optional]*<br>Cards can include a variety of media, including photos, and graphics, such as weather icons.)
[en]: <> (*Supporting text [optional]*<br>Supporting text include text like an article summary or a restaurant description.)
[en]: <> (*Buttons [optional]*<br>Cards can include buttons for actions.)
[en]: <> (*Icons [optional]*<br>Cards can include icons for actions.)
1. *译文*<br>译文
2. *译文*<br>译文
3. *译文*<br>译文
4. *译文*<br>译文
5. *译文*<br>译文
6. *译文*<br>译文
7. *译文*<br>译文
8. *译文*<br>译文

</figcaption></figure>

[en]: <> (Each card is made up of content blocks. All of the blocks, as a whole, are related to a single subject or destination. Content can receive different levels of emphasis, depending on its level of hierarchy.)
译文

<figure>

![]({assets_path}/components/cards/cards-elements-1.png)

<figcaption>

[en]: <> (Cards contain rich media, primary title, supporting text, and actions.)
译文

</figcaption></figure>

[en]: <> (Dividers)
### 译文

[en]: <> (Dividers can be used to separate regions in cards or to indicate areas of a card that can expand.)
译文

<figure>

![]({assets_path}/components/cards/cards-dividers-2.png)

<figcaption>

[en]: <> (Use inset dividers \(1\), dividers that do not run the full length of a card, to separate related content.)
译文

</figcaption></figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-dividers.mp4" src="{assets_path}/components/cards/cards-dividers.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Content that can be expanded should use full-width dividers.)
译文

</figcaption>

</figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Transitions)
### 译文

[en]: <> (Cards can transform to reveal additional content.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-transition.mp4" src="{assets_path}/components/cards/cards-transition.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (A card expands to fill the full screen using a parent-child transition.)
译文

</figcaption>

</figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-behavior-do.mp4" src="{assets_path}/components/cards/cards-behavior-do.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (Expand a card to reveal information.)
译文

</figcaption>

</figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-behavior-dont.mp4" src="{assets_path}/components/cards/cards-behavior-dont.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (Cards don’t flip over to reveal information.)
译文

</figcaption>

</figure>

[en]: <> (Elevation)
### 译文

[en]: <> (On mobile, a card’s default elevation is 1dp, with a raised elevation of 8dp.)
译文

<figure>

![]({assets_path}/components/cards/cards-elevation-1.png)

<figcaption>

[en]: <> (A shadow helps indicate a card.)
译文

</figcaption></figure>

[en]: <> (On desktop and mobile, cards can have a resting elevation of 0dp. They elevate to 8dp on hover.)
译文

<figure>

![]({assets_path}/components/cards/cards-elevation-3.png)

<figcaption>

[en]: <> (A stroke of 0dp helps indicate a card.)
译文

</figcaption></figure>

[en]: <> (Gestures)
### 译文

[en]: <> (Gestures should be implemented consistently within a card collection. Frequently used gestures on cards include swipe, pick up and move, and scrolling.)
译文

[en]: <> (Swipe)
#### 译文

[en]: <> (A swipe gesture can be performed on a single card at a time, anywhere on that card.)
译文

[en]: <> (It can be used to:)
译文

[en]: <> (Dismiss a card)
[en]: <> (Change the state of a card \(such as flagging or archiving it\))
* 译文
* 译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-behavior-swipe-do.mp4" src="{assets_path}/components/cards/cards-behavior-swipe-do.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (A card should only have one swipe action assigned to it.)
译文

</figcaption>

</figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-behavior-swipe-dont.mp4" src="{assets_path}/components/cards/cards-behavior-swipe-dont.mp4" type="video/mp4">
</video>

<figcaption>

{done}

[en]: <> (Cards should not contain swipeable content \(such as an image carousel or pagination\). Swipe gestures should also not cause portions of cards to detach upon swipe.)
译文

</figcaption>

</figure>

[en]: <> (Pick up and move)
#### 译文

[en]: <> (The pick up and move gesture allows users to move and re-order cards in a collection.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-behavior-pickupmove-do.mp4" src="{assets_path}/components/cards/cards-behavior-pickupmove-do.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (When moving a card, increase its elevation.)
译文

</figcaption>

</figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-behavior-pickupmove-dont-1.mp4" src="{assets_path}/components/cards/cards-behavior-pickupmove-dont-1.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (Don’t move cards behind other cards.)
译文

</figcaption>

</figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-behavior-pickupmove-dont-2.mp4" src="{assets_path}/components/cards/cards-behavior-pickupmove-dont-2.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (Don’t let cards bump other elements out of the way. When a card is picked up, it appears in front of all elements \(except app bars and navigation\).)
译文

</figcaption>

</figure>

[en]: <> (Scrolling)
#### 译文

[en]: <> (Card content that is taller than the maximum card height is truncated and does not scroll, but can be displayed by expanding the height of a card. A card can expand beyond the maximum height of the screen, in which case the card scrolls within the screen.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-scrolling-do.mp4" src="{assets_path}/components/cards/cards-scrolling-do.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (On mobile, cards can expand to reveal more content, scrolling within the screen. Content within cards doesn’t scroll.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-scrolling-dont.mp4" src="{assets_path}/components/cards/cards-scrolling-dont.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (On mobile, cards cannot internally scroll, as it could cause two scroll bars to be displayed.)
译文

</figcaption>

</figure>

</div></div>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-desktopscrolling.mp4" src="{assets_path}/components/cards/cards-desktopscrolling.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (On desktop, card content can expand and scroll within a card.)
译文

</figcaption>

</figure>

[en]: <> (Actions)
<h2 id="actions">译文</h2>

[en]: <> (Primary action)
### 译文

[en]: <> (The primary action area of a card is typically the card itself. Often cards are one large touch target to a detail screen on a subject.)
译文

<figure>

![]({assets_path}/components/cards/cards-actions-1.png)

<figcaption>

[en]: <> (The action area of a card contains rich media and supporting text.)
译文

</figcaption></figure>

[en]: <> (Supplemental actions)
### 译文

[en]: <> (Supplemental actions are represented by icons, text, and UI controls on cards. They are typically placed at the bottom of the card.)
译文

[en]: <> (For more than two supplemental actions, use an overflow menu instead.)
译文

<figure>

![]({assets_path}/components/cards/cards-supplementalactions-1.png)

<figcaption>

[en]: <> (Supplemental text and actions at the bottom of the card)
译文

</figcaption></figure>

[en]: <> (Overflow menu)
### 译文

[en]: <> (Overflow menus contain related actions. They are typically placed in the upper-right or lower-right corner of a card.)
译文

<figure>

![]({assets_path}/components/cards/cards-overflowmenu-1b.png)

<figcaption>

[en]: <> (Overflow menus are usually located in the upper-right or lower-right corner of a card.)
译文

</figcaption></figure>

[en]: <> (UI controls)
### 译文

[en]: <> (UI controls can be included within a card to allow the user to interact with a card’s content. UI controls may be in the form of a slider, stars to rate content, chips, or buttons.)
译文

<figure>

![]({assets_path}/components/cards/cards-uicontrols-1.png)

<figcaption>

[en]: <> (This card contains stars to rate content.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/cards/cards-uicontrols-2.png)

<figcaption>

[en]: <> (This card contains choice chips within the action area.)
译文

</figcaption></figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-actions-uicontrols.mp4" src="{assets_path}/components/cards/cards-actions-uicontrols.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (This card contains a slider control within the action area.)
译文

</figcaption>

</figure>

[en]: <> (Additional actions)
### 译文

[en]: <> (Cards can support multiple actions, such as UI controls and an overflow menu. Because cards are entry points to more detailed information, they should contain a limited number of actions.)
译文

<figure>

![]({assets_path}/components/cards/cards-additionalactions-1-dont.png)

<figcaption>

{caution}

[en]: <> (Cards provide entry to more robust information. Be cautious not to overload cards with extraneous information or actions.)
译文

</figcaption></figure>

[en]: <> (Focus)
### 译文

[en]: <> (When traversing through focus points on a card, visit each focused element before moving to the next card.)
译文

[en]: <> (For users that navigate solely using focus traversal \(using a D-pad and keyboard\), cards should have either a primary action or open a new screen containing primary and supplemental actions.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-focus.mp4" src="{assets_path}/components/cards/cards-focus.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Focus traversal of a card)
译文

</figcaption>

</figure>

[en]: <> (Card collections)
<h2 id="card-collections">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (When multiple cards are present, they are grouped together into one or more collections. By default, cards in a collection are coplanar, sharing the same resting elevation unless they are picked up or dragged.)
译文

<figure>

![]({assets_path}/components/cards/cards-cardcollections-hero.png)

</figure>

[en]: <> (Layout)
### 译文

[en]: <> (Organize card collections so that they are easy to use. Their layout affects how they are perceived.)
译文

<figure>

![]({assets_path}/components/cards/cards-cardcollections.png)

<figcaption>

[en]: <> (When adding cards to a collection, the first item is automatically positioned on the top left. Subsequent cards are laid out left to right, top to bottom.)
译文

</figcaption></figure>

[en]: <> (Scannable)
#### 译文

[en]: <> (To make a collection of cards scannable, place them in a consistent pattern.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-1a.png)

<figcaption>

[en]: <> (Scannable cards)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-1b.png)

</figure>

</div></div>

[en]: <> (Dashboard)
#### 译文

[en]: <> (To display multiple subject matters and functions on a screen, use a dashboard-style card collection.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-2a.png)

<figcaption>

[en]: <> (Dashboard-style card collection)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-2b.png)

</figure>

</div></div>

[en]: <> (Distinction)
#### 译文

[en]: <> (To highlight each card’s individuality, style, or novelty, use a card collection with an asymmetric grid.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-3a.png)

<figcaption>

[en]: <> (Cards in an asymmetric grid)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-3b.png)

</figure>

</div></div>

[en]: <> (Contained collections)
### 译文

[en]: <> (Card collections can be placed within a container, and be scrolled within it.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-collections-do.mp4" src="{assets_path}/components/cards/cards-collections-do.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (A card collection can horizontally scroll within a container.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/cards/cards-collections-dont.mp4" src="{assets_path}/components/cards/cards-collections-dont.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (The container for a collection should not be a card, and the entire surface area of the container should not be interactive.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Filtering and sorting)
### 译文

[en]: <> (Card collections can be filtered in a variety of ways, including by date or alphabetical order. If a collection can be filtered, the filter must apply to each card in the collection.)
译文

<figure>

![]({assets_path}/components/cards/cards-cardcollectionsort-1.png)

<figcaption>

[en]: <> (Filter or sorting options should be placed outside of the card collection.)
译文

</figcaption></figure>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Owl Material Theme)
### 译文

[en]: <> (This educational app’s cards have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/cards/card-owl-ahero.png)

<figcaption>

[en]: <> (Owl’s customized cards)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Owl’s cards use custom color on three elements: the container, text, and icon.)
译文

<figure>

![]({assets_path}/components/cards/card-owl-color.png)

</figure>

[en]: <> (Element      | Category      | Attribute          | Value)
[en]: <> (---------    |----------     |---------           |------)
[en]: <> (Container    | Background    | Color<br>Opacity   | #0336FF<br>100%)
[en]: <> (Text, Icons  | On Background | Color<br>Opacity   | #FFFFFF<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Owl’s cards use custom typography for the card title, number, and category text.)
译文

<figure>

![]({assets_path}/components/cards/card-owl-type.png)

</figure>

[en]: <> (Element     |Category      | Attribute                          | Value)
[en]: <> (---------   |-----------   |---------                           |------)
[en]: <> (Title       | Subtitle 1   | Typeface<br>Font<br>Size<br>Case   | Rubik<br>Medium<br>16<br>Title case)
[en]: <> (Number      | Subtitle 2   | Typeface<br>Font<br>Size<br>Case   | Rubik<br>Medium<br>14<br>Title case)
[en]: <> (Category    | Overline     | Typeface<br>Font<br>Size<br>Case   | Rubik<br>Regular<br>10<br>All caps)

译文     |译文     | 译文                        | 译文
--------|-------- |----------                  |-----------
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Owl’s cards use a custom container shape.)
译文

<figure>

![]({assets_path}/components/cards/card-owl-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Cut 0dp<br>Cut 0dp<br>Cut 0dp<br>Cut 0dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Reply Material Theme)
### 译文

[en]: <> (This email app’s cards have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/cards/card-reply-ahero.png)

<figcaption>

[en]: <> (Reply’s customized card)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Reply’s cards use custom color on six elements: the container, metadata text, title text, body text, icon, and icon fill.)
译文

<figure>

![]({assets_path}/components/cards/card-reply-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Container     | Surface       | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Metadata text | On Secondary  | Color<br>Opacity   | #232F34<br>100%)
[en]: <> (Title text    | On Secondary  | Color<br>Opacity   | #232F34<br>100%)
[en]: <> (Body text     | On Secondary  | Color<br>Opacity   | #232F34<br>100%)
[en]: <> (Icon          | On Secondary  | Color<br>Opacity   | #232F34<br>100%)
[en]: <> (Icon fill     | On Secondary  | Color<br>Opacity   | #232F34<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Reply’s cards use custom typography for the card title, body, and metadata text.)
译文

<figure>

![]({assets_path}/components/cards/card-reply-type.png)

</figure>

[en]: <> (Element     |Category      | Attribute                          | Value)
[en]: <> (---------   |-----------   |---------                           |------)
[en]: <> (Title       | H6           | Typeface<br>Font<br>Size<br>Case   | Work Sans<br>Bold<br>21<br>Sentence case)
[en]: <> (Body        | Body 1       | Typeface<br>Font<br>Size<br>Case   | Work Sans<br>Regular<br>17<br>Sentence case)
[en]: <> (Metadata    | Body 2       | Typeface<br>Font<br>Size<br>Case   | Work Sans<br>Regular<br>15<br>Sentence case)

译文     |译文     | 译文                        | 译文
--------|-------- |----------                  |-----------
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Reply’s cards use a custom container shape.)
译文

<figure>

![]({assets_path}/components/cards/card-reply-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Sharp 0dp<br>Sharp 0dp<br>Sharp 0dp<br>Sharp 0dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (*This section should not be read as prescriptive or exhaustive.* Cards have no singular layout, typographic, or image size. All cards should be designed to meet the needs of the content they present. This section shows a variety of card layouts to help showcase that variety.)
译文

[en]: <> (Elevated cards)
#### 译文

<figure>

![]({assets_path}/components/cards/specs-cards-template1.png)

</figure>

<figure>

![]({assets_path}/components/cards/specs-cards-template5.png)

</figure>

<figure>

![]({assets_path}/components/cards/specs-cards-template014.png)

</figure>

[en]: <> (Outlined cards)
#### 译文

<figure>

![]({assets_path}/components/cards/specs-outline-cards.png)

</figure>
</div>