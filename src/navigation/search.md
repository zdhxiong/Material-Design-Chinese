<div class="article__intro">

[en]: <> (Search)
# 搜索

[en]: <> (Search allows users to quickly find app content.)
用户可通过搜索功能快速查找应用中的内容。

<figure>

![]({assets_path}/navigation/search/search-hero-1.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Persistent search)
[en]: <> (Expandable search)
* [使用搜索功能](#usage)
* [固定式搜索](#persistent-search)
* [隐藏式搜索](#expandable-search)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">应用搜索功能</h2>

[en]: <> (Search allows users to quickly locate content across an app. Basic search enables users to input a query into a search text field to view related results. )
搜索功能使用户可以快速地在应用中查找内容。利用基本的搜索功能，用户将文本输入文本框并查看相关结果。

[en]: <> (Search query input methods can be extended to include historical suggestions, auto-completion of queries, and voice input.)
搜索时的输入方式可以有多种，包括基于历史记录的建议、自动补全和语音输入。

[en]: <> (Persistent search)
<h2 id="persistent-search">固定式搜索</h2>

[en]: <> (Use persistent search when search is the primary focus of your app. The search text field is presented inside of a search bar, ready to receive focus.)
如果应用的首要功能是搜索，使用固定式搜索。设计一个引人关注的搜索栏，使用户在需要时激活。

[en]: <> (Usage)
#### 应用方式

[en]: <> (When in focus, the search experience expands to fill the entire screen. Optionally, historical search suggestions can displayed below the text field.)
[en]: <> (A user can type a query or select from a suggestion \(if available\). Upon pressing Return, the search is submitted.)
[en]: <> (Search results are displayed below the search bar.)
[en]: <> (To release focus from the search box and dismiss search suggestions, the user taps the Up arrow.)
1. 当搜索功能被激活时，应占据整个屏幕。同时，历史记录建议可以显示在文本输入框下方。
2. 用户可以输入文本或在建议中选择一个（如果有）。直到按下确认键，查询内容才被提交。
3. 搜索结果在搜索栏下方展示。
4. 用户点击返回按钮以忽略建议、退出搜索，回到初始状态。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/navigation/search/baseline-persistent-v03.mp4" src="{assets_path}/navigation/search/baseline-persistent-v03.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Persistent search field receiving focus, loading results, and returning to an unfocused state)
搜索时，固定式搜索栏激活并显示结果。搜索结束后，搜索栏回到初始状态

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/navigation/search/persistentsearch-1.png)

<figcaption>

[en]: <> (Persistent search bar without focus \(default\))
未激活的搜索栏

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/navigation/search/persistentsearch-2.png)

<figcaption>

[en]: <> (Persistent search bar in focus, with cards of suggested queries below)
激活的搜索栏，下方是搜索建议卡片

</figcaption></figure></div></div>

[en]: <> (Expandable search)
<h2 id="expandable-search">隐藏式搜索</h2>

[en]: <> (Use expandable search when search is not the primary focus of your app. Expandable search displays a search icon in the toolbar, instead of an open search text box.)
如果应用的首要功能不是搜索，则使用隐藏式搜索。在工具栏中设置一个搜索图标，以代替搜索栏。

[en]: <> (Usage)
#### 应用方式

[en]: <> (The user taps the search icon \(in the toolbar\) to transform it into a focused search bar.)
[en]: <> (As a user types, historical search suggestions can be shown beneath the search bar.)
[en]: <> (Upon entering a query or choosing a suggestion, pressing Return submits the search.)
[en]: <> (Results appear below the search bar and scroll beneath it.)
* 用户（在工具栏内）点击搜索图标使搜索栏展开。
* 当用户输入时，历史搜索建议在搜索栏下方显示。
* 直到用户按下确认键或选择一个建议项，搜索才被提交。
* 结果在搜索栏下方显示，结果可以上下滚动。

[en]: <> (When displaying results, the search text field remains visible, but not in focus. Tapping the Up arrow releases the focus from search, dismisses suggestions and the on-screen keyboard, and returns the toolbar to its original state.)
当显示搜索结果时，搜索栏仍保持可见，但不处于激活状态。点击返回按钮可退出搜索功能，搜索栏取消激活、搜索建议消失、键盘收起，回到初始状态。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/navigation/search/baseline-expandable-v02.mp4" src="{assets_path}/navigation/search/baseline-expandable-v02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Expandable search bar opening from an icon and loading results)
隐藏的搜索栏展开并加载结果

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/navigation/search/expandingsearch-1.png)

<figcaption>

[en]: <> (Expandable search in its default state)
处在默认状态的隐藏式搜索

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/navigation/search/expandingsearch-3.png)

<figcaption>

[en]: <> (Search text field in focus with auto-complete suggestions)
激活的搜索功能，搜索栏下方显示自动补全建议

</figcaption></figure></div></div></div>
