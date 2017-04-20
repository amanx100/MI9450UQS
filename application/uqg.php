<div layout="column" layout-fill>
    <md-toolbar class="md-hue-2">
        <div class="md-toolbar-tools">

            <md-button class="md-icon-button" aria-label="Settings" ng-disabled="false">
                <img src="image/self/logo/markem-imaje-logo.png" width="45px" height="45px" style="margin: -10px;">
            </md-button>

            <h2 flex md-truncate>markem-imaje 9450 Unique Code Generator</h2>

            <i>{{userFullName}}</i>

            <md-menu>
                <md-button class="md-icon-button" aria-label="account" ng-mouseenter="$mdMenu.open()">
                    <md-icon md-svg-icon="image/svg/ic_account_circle_white_48px.svg" style="color: gold; margin: -10px;" ng-style="{height:'45px',width:'45px'}"></md-icon>
                </md-button>
                <md-menu-content width="4" ng-mouseleave="$mdMenu.close()">
                    <md-menu-item ng-repeat="item in [1, 2, 3]">
                        <md-button>
                            Option {{item}}
                        </md-button>
                    </md-menu-item>
                </md-menu-content>
            </md-menu>

        </div>
    </md-toolbar>

    <section layout="row" flex>
        <md-sidenav md-is-locked-open="true" class="md-whiteframe-4dp">
            <form name="ucgInput" autocomplete="off">
                <md-input-container>
                    <label>Number Of Unique Codes</label>
                    <input type="number" name="number-of-unique-code" ng-pattern="/^[0-9]{3}$/" required>
                </md-input-container>
            </form>
        </md-sidenav>
        <md-content id="content" layout-padding flex>
            <md-icon md-svg-src="svg/avatar-1.svg" class="avatar"></md-icon>
            <h2>Mickel Jaction</h2>
            <p>Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Morbi sit amet torto
                vestibulum, cursus dolor et, gravida turpis. Fusce posuere ligula quis velit
                dignissim venenatis. Aenean sagittis, lectus at lacinia pulvinar, arcu sapien
                rutrum mauris, nec viverra lectus ex et purus. Etiam luctus, leo ultricies sagittis
                tempor, arcu dui bibendum mi, ut porttitor arcu odio ac nisi. Proin maximus tellus vitae
                lectus venenatis, ac euismod diam lacinia. Quisque eget est a justo tempus vehicula. Vivamus
                aliquam a felis gravida rhoncus. Vivamus nec tortor vel lacus semper congue. Integer eu risus
                lacus. Donec efficitur nisl suscipit nibh posuere pharetra. Proin et nisl a neque faucibus
                ullamcorper vel nec nunc. Ut porttitor eu dolor ac scelerisque. Aliquam a sem lorem.</p>
        </md-content>
    </div>
</section>




<!--<div>
    <h1>Hello {{userFullName}}</h1>

    <a target="_blank" href="preface.sw?app=download">Download me</a>
</div>-->