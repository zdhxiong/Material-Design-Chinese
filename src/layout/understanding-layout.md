<div class="article__intro">

[en]: <> (Understanding layout)
# 理解布局

[en]: <> (Material Design layouts encourage consistency across platforms, environments, and screen sizes by using uniform elements and spacing.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Pixel density)
* [译文](#usage)
* [译文](#pixel-density)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/layout/understanding-layout/01-intuitive-structure.png)

<figcaption>

[en]: <> (Predictable)
#### 译文

[en]: <> (UIs should use intuitive and predictable layouts, with consistent UI regions and spatial organization.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/layout/understanding-layout/03-consistency.png)

<figcaption>

[en]: <> (Consistent)
#### 译文

[en]: <> (Layouts should use a consistent grid, keylines, and padding.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/layout/understanding-layout/04-reactiveness.png)

<figcaption>

[en]: <> (Responsive)
#### 译文

[en]: <> (Layouts are adaptive and react to input from the user, device, and screen elements.)
译文

</figcaption></figure></div></div>

[en]: <> (Structure)
### 译文

[en]: <> (Material Design layouts are visually balanced. Most measurements align to an 8dp grid applied, which aligns both spacing and the overall layout.)
译文

[en]: <> (Smaller components, such as iconography and typography, can align to a 4dp grid.)
译文

<figure>

![]({assets_path}/layout/understanding-layout/layout-unitsmeasurements-dev-grid.png)

<figcaption>

[en]: <> (8dp and 4dp units)
译文

</figcaption></figure>

[en]: <> (Pixel density)
<h2 id="pixel-density">译文</h2>

[en]: <> (Screen pixel density and resolution vary depending on the platform. Device-independent pixels and scalable pixels are units that provide a flexible way to accommodate a design across platforms.)
译文

[en]: <> (Calculating pixel density)
### 译文

[en]: <> (The number of pixels that fit into an inch is referred to as pixel density. High-density screens have more pixels per inch than low-density ones. As a result, UI elements of the same pixel dimensions appear larger on low-density screens, and smaller on high-density screens.)
译文

[en]: <> (To calculate screen density, you can use this equation:)
译文

[en]: <> (Screen density = Screen width \(or height\) in pixels / Screen width \(or height\) in inches)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/layout/understanding-layout/layout-unitsmeasurements-pixeldensity-high.png)

<figcaption>

[en]: <> (High-density display)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/layout/understanding-layout/layout-unitsmeasurements-pixeldensity-lower.png)

<figcaption>

[en]: <> (Lower density display)
译文

</figcaption></figure></div></div>

[en]: <> (Density independence)
### 译文

[en]: <> (Density independence refers to the uniform display of UI elements on screens with different densities.)
译文

[en]: <> (Density-independent pixels, written as dp \(pronounced “dips”\), are flexible units that scale to have uniform dimensions on any screen. Material UIs use density-independent pixels to display elements consistently on screens with different densities.)
译文

<figure>

![]({assets_path}/layout/understanding-layout/layout-unitsmeasurements-pixeldensity-lowhigh.png)

<figcaption>

[en]: <> (Low-density screen displayed with density independence)
[en]: <> (High-density screen displayed with density independence)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Pixel density on Android)
### 译文

[en]: <> (When developing an Android app, use dp to display elements uniformly on screens with different densities. A dp is equal to one physical pixel on a screen with a density of 160.)
译文

[en]: <> (To calculate dp:)
译文

[en]: <> (dp = \(width in pixels * 160\) / screen density)
译文

<table><thead><tr><th>

[en]: <> (Screen physical width)
译文

</th><th>

[en]: <> (Screen density)
译文

</th><th>

[en]: <> (Screen width in pixels)
译文

</th><th>

[en]: <> (Screen width in dps)
译文

</th></tr></thead><tbody><tr><td>1.5 in</td><td>120</td><td>180 px</td><td rowspan="4">240 dp</td></tr><tr><td>1.5 in</td><td>160</td><td>240 px</td></tr><tr><td>1.5 in</td><td>240</td><td>360 px</td></tr></tbody></table>

[en]: <> (Scalable pixels \(sp\))
#### 译文

[en]: <> (Scalable pixels \(sp\) serve the same function as density-independent pixels \(dp\), but for fonts. The default value of an sp is the same as the default value for a dp.)
译文

[en]: <> (The primary difference between an sp and a dp is that sp’s preserve a user's font settings. Users who have larger text settings for accessibility will see font sizes match their text size preferences.)
译文

[en]: <> (Pixel density on iOS)
### 译文

[en]: <> (Logical resolution)
#### 译文

[en]: <> (iOS determines density using logical resolution, which measures its units in points. Points are scaled using a Native Scale factor, which map to a device's native resolution \(in pixels\).)
译文

[en]: <> (For example, when designing for the iPhone X, you would design for a logical resolution of 375 x 812 points. When rendered, elements are processed by the graphics hardware to fill the iPhone X's 1125 x 2436 pixel screen.)
译文

[en]: <> (Units for iOS)
#### 译文

[en]: <> (When designing for iOS, use points \(pts\).)
译文

[en]: <> (Learn more:)
译文

[en]: <> (Apple iOS' Documentation on [Displays]\(https://developer.apple.com/library/content/documentation/DeviceInformation/Reference/iOSDeviceCompatibility/Displays/Displays.html\))
[en]: <> (PaintCode's [Guide to iPhone Resolutions]\(https://www.paintcodeapp.com/news/ultimate-guide-to-iphone-resolutions\))
* 译文
* 译文

[en]: <> (Pixel density on the web)
### 译文

[en]: <> (Logical resolution)
#### 译文

[en]: <> (Use the device's logical resolution, which scales to the device's screen resolution.)
译文

[en]: <> (Units for the web)
#### 译文

[en]: <> (When designing for the web, replace dp with px \(for pixel\).)
译文

</div>
