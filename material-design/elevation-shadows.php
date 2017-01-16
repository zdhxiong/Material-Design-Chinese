<?php
$vars = array(
  'title' => 'Elevation &amp; shadows',
  'category' => 'Material design',
  'theme_color' => '#00bcd4',
  'color_name' => 'cyan',
  'prev_title' => 'Material properties',
  'prev_path' => 'what-is-material/material-properties',
  'next_title' => 'What’s new',
  'next_path' => 'material-design/whats-new'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Elevation &amp; shadows</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Objects in material design possess similar qualities to objects in the physical world. </h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>In the physical world, objects can be stacked or affixed to one another, but cannot pass through each other. Objects also cast shadows and reflect light.</p>
                <p>Material design reflects these qualities to form a spatial model that is familiar to users and can be applied consistently across apps. </p>
              </div>
              <div class="module">
                <h3><strong>Elevation</strong></h3>
                <p>Measured from the front of one surface to the front of another, an element’s elevation indicates the distance between surfaces and the depth of its shadow.</p>
                <h3><strong>Resting elevation</strong></h3>
                <p>All material elements have resting elevations. While components have consistent resting elevations across apps, they may have different resting elevations across platforms and devices.</p>
                <h3><strong>Dynamic elevation offsets</strong></h3>
                <p>Dynamic elevation offsets are the goal elevation that a component moves towards, relative to its resting state.</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/material-design/elevation-shadows/what_is_material_elevation_and_shadows.png"/>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>


      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../what-is-material/elevation-shadows.html#elevation-shadows-elevation-android" data-qp-ui-data-id="qp:1">Elevation (Android)</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../what-is-material/elevation-shadows.html#elevation-shadows-shadows" data-qp-ui-data-id="qp:2">Shadows</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../what-is-material/elevation-shadows.html#elevation-shadows-object-relationships" data-qp-ui-data-id="qp:3">Object relationships</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="elevation-shadows-elevation-android" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Elevation (Android)
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Elevation is the relative depth, or distance, between two surfaces along the z-axis. </p>
                    <p><strong>Specifications:</strong></p>
                    <ul class="lst-kix_ywnojxagdrrs-0 start">
                      <li>Elevation is measured in the same units as the x and y axes, typically in density-independent pixels (dp). Because material elements have depth (all material is 1dp thick), elevation is measured in distance from the top of one surface to the top of another.</li>
                      <li>A child object's elevation is relative to the parent object's elevation.</li>
                    </ul>
                    <p>The images and values shown are for Android apps.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation1.png"/>
                      </div>
                      <figcaption>
                        <p>Multiple elevation measurements for two objects</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Resting elevation</h1>
                    <p>All material objects, regardless of size, have a resting elevation, or default elevation that does not change. If an object changes elevation, it should return to its resting elevation as soon as possible.</p>
                    <p>Desktop resting elevation is 2dp below the listed values to accommodate mouse and non-touch environments.</p>
                    <p><strong>Component elevations:</strong></p>
                    <ul class="lst-kix_h2btshl9z56-0 start">
                      <li>Components maintain consistent resting elevations across apps. For example, the floating action button’s elevation does not vary from one app to another.</li>
                      <li>Components may have different resting elevations across platforms and devices, depending on the depth of the environment. For instance, TV has a greater depth than desktop as it has a larger screen and is viewed from further away. Similarly, both TV and desktop have a greater depth than mobile.</li>
                    </ul>
                    <p></p>
                    <h2>Responsive elevation and dynamic elevation offsets</h2>
                    <p>Some component types have responsive elevation, meaning they change elevation in response to user input (e.g., normal, focused, and pressed) or system events. These elevation changes are consistently implemented using <strong>dynamic elevation offsets</strong>.</p>
                    <p>Dynamic elevation offsets are the goal elevation that a component moves towards, relative to the component’s resting state. They ensure that elevation changes are consistent across actions and component types. For example, all components that lift on press have the same elevation change relative to their resting elevation.</p>
                    <p>Once the input event is completed or cancelled, the component will return to its resting elevation.</p>
                    <h2>Avoiding elevation interference</h2>
                    <p>Components with responsive elevations may encounter other components as they move between their resting elevations and dynamic elevation offsets. Because <a href="../what-is-material/material-properties.html#material-properties-physical-properties">material cannot pass through other material</a>, components avoid interfering with one another any number of ways, whether on a per-component basis or using the entire app layout.</p>
                    <p>On a component level, components can move or be removed before they cause interference. For example, a floating action button (FAB) can disappear or move off-screen before a user picks up a card, or it can move if a snackbar appears.</p>
                    <p>On the layout level, design your app layout to minimize opportunities for interference. For example, position the FAB to one side of a stream of cards so the FAB won’t interfere when a user tries to pick up one of cards.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Elevation (dp)</p></td>
                        <td colspan="1" rowspan="1"><p>Component</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                        <td colspan="1" rowspan="1"><p>Dialog</p><p>Picker</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Nav drawer </p>
                          <p>Right drawer</p>
                          <p>Modal bottom Sheet</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>Floating action button (FAB - pressed)</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>9</p></td>
                        <td colspan="1" rowspan="1"><p>Sub menu (+1dp for each sub menu)</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Bottom navigation bar</p>
                          <p>Menu</p>
                          <p>Card (when picked up) </p>
                          <p>Raised button (pressed state)</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Floating action button (FAB - resting elevation)</p>
                          <p>Snackbar</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>App Bar</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Refresh indicator</p>
                          <p>Quick entry / Search bar (scrolled state)</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Card (resting elevation) *</p>
                          <p>Raised button (resting elevation)*</p>
                          <p>Quick entry / Search bar (resting elevation)</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                        <td colspan="1" rowspan="1"><p>Switch</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <h1>Component elevation comparisons</h1>
                    <p>The following diagram compares component resting elevations and dynamic elevation offsets. </p>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation2.png"/>
                      </div>
                      <figcaption>
                        <p>In this diagram, only the elevation dimensions and layout for components are accurate. Other dimensions and overall layout of components are for illustration only.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation3.png"/>
                      </div>
                      <figcaption>
                        <p>An example app layout with cards and a floating action button, along with a cross-section diagram of its component elevations along its z-axis</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation4.png"/>
                      </div>
                      <figcaption>
                        <p>An example app layout with an open navigation drawer, along with a cross-section diagram of its component elevations along its z-axis.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="elevation-shadows-shadows" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Shadows
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Shadows provide important visual cues about objects’ depth and directional movement. They are the only visual cue indicating the amount of separation between surfaces. An object’s elevation determines the appearance of its shadow.</p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Without a shadow, nothing indicates that the floating action button is separate from the background surfaces.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Crisp shadows indicate the floating action button and the blue sheet are separate elements. However, their shadows are so similar that they imply they are both at the same elevation.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Softer, larger shadows indicate the floating action button is at a higher elevation than the blue sheet, which has a crisper shadow.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p>In motion, shadows provide useful cues about an object’s direction of movement and whether the distance between surfaces is increasing or decreasing.</p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Without a shadow to indicate elevation, it’s unclear whether this square is increasing in size or increasing its elevation.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>The shadow grows softer and larger as the object’s elevation increases and grows crisper and smaller as the elevation decreases.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>In this case, the consistent shadow helps the user understand that the object is changing shape as opposed to changing elevation.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Component reference shadows</h1>
              <p>The following component shadows should be used as canonical references. If there are any differences between the following reference shadows and component shadows found elsewhere within this spec, defer to these reference shadows.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>App bar</strong></p>
                    <p>4dp</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component06.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an app bar </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Raised button<br>
                      </strong>Resting state: 2dp<br>
                      Pressed state: 8dp</p>
                    <p>For desktop only, raised buttons can have an elevation of:<br>
                      Resting state: 0dp<br>
                      Pressed state: 2dp</p>
                    <p>See <a href="../components/buttons.html##buttons-raised-buttons">raised buttons</a> for more information</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component02.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Floating action button (FAB)</strong></p>
                    <p>Resting state: 6dp</p>
                    <p>Pressed state: 12dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component08.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Card</strong></p>
                    <p>Resting state: 2dp</p>
                    <p>Raised state: 8dp</p>
                    <p>For<strong> </strong>Desktop only, see <a href="../components/cards.html#cards-content-blocks">Content blocks</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component03.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Menus and sub menus</strong></p>
                    <p>Menus: 8dp</p>
                    <p>Sub menus: 9dp (+1 dp for each sub menu)</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component09.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Dialogs</strong></p>
                    <p>24dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component12.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Nav Drawer &amp; Right drawer</strong></p>
                    <p>16dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component10.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Modal bottom sheet</strong></p>
                    <p>16dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component11.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Refresh indicator</strong></p>
                    <p>3dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component05.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Quick entry/Search bar</strong></p>
                    <p>Resting state: 2dp</p>
                    <p>Scrolled state: 3dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component04.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Snackbar</strong></p>
                    <p>6dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component07.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Switch</strong></p>
                    <p>1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component01.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="elevation-shadows-object-relationships" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Object relationships
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Object hierarchy</h1>
                    <p>How you organize objects, or collections of objects, in an app determines how they move in relation to one another. Objects can move independently of each other or be constrained by objects higher in the hierarchy. </p>
                    <p>All objects are part of a hierarchy described in terms of a parent-child relationships. The “child” in each of these relationships refers to an element that is a subordinate to its “parent” element. Objects can be children of either the system or another object. </p>
                    <p>Parent-child specifics:</p>
                    <ul class="lst-kix_vujeetwcvlnf-0 start">
                      <li>Each object has one parent.</li>
                      <li>Each object may have any number of children.</li>
                      <li>Children inherit transformative properties from their parent, such as position, rotation, scale, and elevation.</li>
                      <li>Siblings are objects at the same level of hierarchy.</li>
                    </ul>
                    <h2><strong><strong>Exceptions</strong></strong></h2>
                    <p>Items parented to the root, such as primary UI elements, move independently of other objects. For example, the floating action button does not scroll with content. Other elements include:</p>
                    <ul class="lst-kix_q1k9qrwkv05c-0 start">
                      <li>An app’s side nav drawer</li>
                      <li>The action bar</li>
                      <li>Dialogs</li>
                    </ul>
                    <h2><strong><strong>Interaction</strong></strong></h2>
                    <p>How objects interact with one another is determined by their place in the parent-child hierarchy. </p>
                    <p>For example:</p>
                    <ul class="lst-kix_lr0wngj8xi4f-0 start">
                      <li>Children have minimal z-axis separation from their parent; other objects do not get inserted between parents and children.</li>
                      <li>In a scrolling card collection, the cards are siblings of each other, so they all move together in tandem. They are children of the card collection object that controls their movement.</li>
                    </ul>
                    <h2><strong><strong>Elevation</strong></strong></h2>
                    <p>How you determine the elevation of objects – their position in z-space – depends on the content hierarchy you want to express and whether an object needs to move independently of other objects. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/elevation-shadows/WhatIsMaterial_ObjectsIn3DSpace_ObjectRelationships_01_RaisedChildButton_001.webm" type="video/webm">
                            <source src="../static/media/material-design/elevation-shadows/WhatIsMaterial_ObjectsIn3DSpace_ObjectRelationships_01_RaisedChildButton_001.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>As the parent sheet scrolls, the raised button (its child) scrolls off screen with it.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/elevation-shadows/WhatIsMaterial_ObjectsIn3DSpace_ObjectRelationships_02_FAB_001.webm" type="video/webm">
                            <source src="../static/media/material-design/elevation-shadows/WhatIsMaterial_ObjectsIn3DSpace_ObjectRelationships_02_FAB_001.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>As the card collection scrolls off-screen, its child cards scroll off-screen with it. The floating action button remains in place because its parent is not being scrolled.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
        <div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
include $public_files['footer'];
?>