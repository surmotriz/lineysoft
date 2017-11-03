<?php include "../layout/header.php"; ?>
<div class="container-fluid">
    <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">

            <form class="bd-search d-flex align-items-center">
                <input type="search" class="form-control" id="search-input" placeholder="Search..."
                       aria-label="Search for..." autocomplete="off">
                <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button"
                        data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav"
                        aria-expanded="false" aria-label="Toggle docs navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30"
                         focusable="false"><title>Menu</title>
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10"
                              d="M4 7h22M4 15h22M4 23h22"/>
                    </svg>
                </button>
            </form>

            <nav class="collapse bd-links" id="bd-docs-nav">
                <div class="bd-toc-item active">
                    <a class="bd-toc-link" href="/docs/4.0/getting-started/introduction/">
                        Getting started
                    </a>

                    <ul class="nav bd-sidenav">
                        <li class="active bd-sidenav-active">
                            <a href="/docs/4.0/getting-started/introduction/">
                                Introduction
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/getting-started/download/">
                                Download
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/getting-started/contents/">
                                Contents
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/getting-started/browsers-devices/">
                                Browsers & devices
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/getting-started/javascript/">
                                JavaScript
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/getting-started/theming/">
                                Theming
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/getting-started/build-tools/">
                                Build tools
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/getting-started/webpack/">
                                Webpack
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/getting-started/accessibility/">
                                Accessibility
                            </a>


                        </li>
                    </ul>
                </div>
                <div class="bd-toc-item">
                    <a class="bd-toc-link" href="/docs/4.0/layout/overview/">
                        Layout
                    </a>

                    <ul class="nav bd-sidenav">
                        <li>
                            <a href="/docs/4.0/layout/overview/">
                                Overview
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/layout/grid/">
                                Grid
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/layout/media-object/">
                                Media object
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/layout/utilities-for-layout/">
                                Utilities for layout
                            </a>


                        </li>
                    </ul>
                </div>
                <div class="bd-toc-item">
                    <a class="bd-toc-link" href="/docs/4.0/content/reboot/">
                        Content
                    </a>

                    <ul class="nav bd-sidenav">
                        <li>
                            <a href="/docs/4.0/content/reboot/">
                                Reboot
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/content/typography/">
                                Typography
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/content/code/">
                                Code
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/content/images/">
                                Images
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/content/tables/">
                                Tables
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/content/figures/">
                                Figures
                            </a>


                        </li>
                    </ul>
                </div>
                <div class="bd-toc-item">
                    <a class="bd-toc-link" href="/docs/4.0/components/alerts/">
                        Components
                    </a>

                    <ul class="nav bd-sidenav">
                        <li>
                            <a href="/docs/4.0/components/alerts/">
                                Alerts
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/badge/">
                                Badge
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/breadcrumb/">
                                Breadcrumb
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/buttons/">
                                Buttons
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/button-group/">
                                Button group
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/card/">
                                Card
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/carousel/">
                                Carousel
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/collapse/">
                                Collapse
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/dropdowns/">
                                Dropdowns
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/forms/">
                                Forms
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/input-group/">
                                Input group
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/jumbotron/">
                                Jumbotron
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/list-group/">
                                List group
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/modal/">
                                Modal
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/navs/">
                                Navs
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/navbar/">
                                Navbar
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/pagination/">
                                Pagination
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/popovers/">
                                Popovers
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/progress/">
                                Progress
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/scrollspy/">
                                Scrollspy
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/components/tooltips/">
                                Tooltips
                            </a>


                        </li>
                    </ul>
                </div>
                <div class="bd-toc-item">
                    <a class="bd-toc-link" href="/docs/4.0/utilities/borders/">
                        Utilities
                    </a>

                    <ul class="nav bd-sidenav">
                        <li>
                            <a href="/docs/4.0/utilities/borders/">
                                Borders
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/clearfix/">
                                Clearfix
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/close-icon/">
                                Close icon
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/colors/">
                                Colors
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/display/">
                                Display
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/embed/">
                                Embed
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/flex/">
                                Flex
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/float/">
                                Float
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/image-replacement/">
                                Image replacement
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/position/">
                                Position
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/screenreaders/">
                                Screenreaders
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/sizing/">
                                Sizing
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/spacing/">
                                Spacing
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/text/">
                                Text
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/vertical-align/">
                                Vertical align
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/utilities/visibility/">
                                Visibility
                            </a>


                        </li>
                    </ul>
                </div>
                <div class="bd-toc-item">
                    <a class="bd-toc-link" href="/docs/4.0/extend/icons/">
                        Extend
                    </a>

                    <ul class="nav bd-sidenav">
                        <li>
                            <a href="/docs/4.0/extend/icons/">
                                Icons
                            </a>


                        </li>
                    </ul>
                </div>
                <div class="bd-toc-item">
                    <a class="bd-toc-link" href="/docs/4.0/migration/">
                        Migration
                    </a>

                    <ul class="nav bd-sidenav"></ul>
                </div>
                <div class="bd-toc-item">
                    <a class="bd-toc-link" href="/docs/4.0/about/history/">
                        About
                    </a>

                    <ul class="nav bd-sidenav">
                        <li>
                            <a href="/docs/4.0/about/history/">
                                History
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/about/team/">
                                Team
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/about/brand/">
                                Brand
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/about/license/">
                                License
                            </a>


                        </li>
                        <li>
                            <a href="/docs/4.0/about/translations/">
                                Translations
                            </a>


                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<?php include "../layout/footer.php"; ?>
