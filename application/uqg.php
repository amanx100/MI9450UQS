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
                    <md-menu-item>
                        <md-button>
                            Update Balance
                        </md-button>
                    </md-menu-item>
                    <md-menu-item>
                        <md-button>
                            Change Password
                        </md-button>
                    </md-menu-item>
                    <md-menu-item>
                        <md-button ng-click="logout()">
                            Logout
                        </md-button>
                    </md-menu-item>
                </md-menu-content>
            </md-menu>

        </div>
    </md-toolbar>

    <section layout="row" flex>

        <md-sidenav md-is-locked-open="true" class="md-whiteframe-4dp" layout="column">
            <md-content layout="column" flex layout-padding>
                <form name="ucgInput" autocomplete="off">
                    <md-checkbox ng-model="schema_digit" aria-label="Include Digit" class="md-primary" flex>
                        Include Digit
                    </md-checkbox>
                    <md-checkbox ng-model="schema_uppercase" aria-label="Include Uppercase" class="md-primary" flex>
                        Include Uppercase
                    </md-checkbox>
                    <md-checkbox ng-model="schema_lowercase" aria-label="Include Lowercase" class="md-primary" flex>
                        Include Lowercase
                    </md-checkbox>
                    <md-input-container class="md-block">
                        <label>Include More Character(s)</label>
                        <input type="text" name="inc-char" ng-model="schema_inchar">
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Exclude Character(s)</label>
                        <input type="text" name="ex-char" ng-model="schema_exchar">
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Code Length</label>
                        <input type="number" name="codeLength" min="5" max="20" ng-model="schema_clength" required>
                        <div ng-messages="ucgInput.codeLength.$error" role="alert">
                            <div ng-message="min">minimum value 5!</div>
                            <div ng-message="max">minimum value 20!</div>
                            <div ng-message="required">this field is required!</div>
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Code Prefix</label>
                        <input type="text" name="code-prefix" ng-model="schema_prefix">
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Code Suffix</label>
                        <input type="text" name="code-suffix" ng-model="schema_suffix">
                    </md-input-container>

                    <label>Code Separators</label>
                    <div layout="row">
                        <md-input-container class="md-block">
                            <label>Positoin 1</label>
                            <input type="number" name="codeSpr1" max="20" ng-model="separator.pos1">
                        </md-input-container>
                        <md-input-container class="md-block">
                            <label>String 1</label>
                            <input type="text" name="codeStr1" maxlength="6" ng-model="separator.str1">
                        </md-input-container>
                    </div>
                    <div layout="row">
                        <md-input-container class="md-block">
                            <label>Positoin 2</label>
                            <input type="number" name="codeSpr2" max="20" ng-model="separator.pos2">
                        </md-input-container>
                        <md-input-container class="md-block">
                            <label>String 2</label>
                            <input type="text" name="codeStr2" maxlength="6" ng-model="separator.str2">
                        </md-input-container>
                    </div>
                    <div layout="row">
                        <md-input-container class="md-block">
                            <label>Positoin 3</label>
                            <input type="number" name="codeSpr3" max="20" ng-model="separator.pos3">
                        </md-input-container>
                        <md-input-container class="md-block">
                            <label>String 3</label>
                            <input type="text" name="codeStr3" maxlength="6" ng-model="separator.str3">
                        </md-input-container>
                    </div>
                    <div layout="row">
                        <md-input-container class="md-block">
                            <label>Positoin 4</label>
                            <input type="number" name="codeSpr4" max="20" ng-model="separator.pos4">
                        </md-input-container>
                        <md-input-container class="md-block">
                            <label>String 4</label>
                            <input type="text" name="codeStr4" maxlength="6" ng-model="separator.str4">
                        </md-input-container>
                    </div>
                    <div layout="row">
                        <md-input-container class="md-block">
                            <label>Positoin 5</label>
                            <input type="number" name="codeSpr5" max="20" ng-model="separator.pos5">
                        </md-input-container>
                        <md-input-container class="md-block">
                            <label>String 5</label>
                            <input type="text" name="codeStr5" maxlength="6" ng-model="separator.str5">
                        </md-input-container>
                    </div>
                    <br>
                    <br>
                </form>
            </md-content>
            <md-button class="md-fab md-raised md-primary" ng-click="schema_submit()" style="position: absolute; bottom: 10px; right: 10px;">
                <md-icon md-svg-icon="image/svg/ic_done_white_24px.svg" ></md-icon>
            </md-button>
        </md-sidenav>

        <div layout="column" flex>
            <md-content md-whiteframe="4" layout="column" layout-padding flex>
                <table class="tbl-content">
                    <tbody>
                    <tr>
                        <td>using characters</td>
                        <td>:</td>
                        <td>67</td>
                    </tr>
                    <tr>
                        <td>characters set</td>
                        <td>:</td>
                        <td>
                            a b c d e f g h i j k l m n o p q r s
                            t u v w x y z A B C D E F G H I J K L M N O
                            P Q R S T U V W X Y Z 1 2 3 4 5 6 7 8 9 0 $ %
                            ^ & * (
                        </td>
                    </tr>
                    <tr>
                        <td>total combination</td>
                        <td>:</td>
                        <td>876798759897876</td>
                    </tr>
                    <tr>
                        <td>string length</td>
                        <td>:</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Code Preview</td>
                        <td>:</td>
                        <td>
    <pre style="background-color: #fff; text-decoration: double;">

    1H9DBCBU2YIQMONO
    1Z0HR4FS3Y0ZI8VK
    2GRM6WJQ4XJ8DT3G
    2YIQMONO5X1H9DBC
    3G9V2GRM6WJQ4XJ8
    3Y0ZI8VK7W1Z0HR4
    4FS3Y0ZI8VK7W1Z0
    4XJ8DT3G9V2GRM6W
    5FACTL7EAUKPN6ES
    5X1H9DBCBU2YIQMO
    </pre>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </md-content>
            <md-button class="md-fab md-raised md-warn" style="position: absolute; bottom: 10px; right: 330px;">
                <md-tooltip md-direction="left">Yes I want like this!</md-tooltip>
                <md-icon md-svg-icon="image/svg/ic_done_white_24px.svg"></md-icon>
            </md-button>
        </div>


        <md-content md-whiteframe="4" layout="column" layout-padding style="background-color: white; width: 320px;">
            <table class="tbl-account">
                <tbody>
                <tr>
                    <td>ACCOUNT TYPE</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>PAY/USE</td>
                </tr>
                <tr>
                    <td>DEBIT</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>0 TK</td>
                </tr>
                <tr>
                    <td>CREDIT</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>1200 TK</td>
                </tr>
                <tr>
                    <td>CREDIT LIMIT</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>10,000 TK</td>
                </tr>
                <tr>
                    <td>COST/CODE</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>0.01 TK</td>
                </tr>
                <tr>
                    <td>CODE LIMIT</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>100000990</td>
                </tr>
                <tr>
                    <td>TOTAL CODE</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>23885756</td>
                </tr>
                <tr>
                    <td>GENERATED</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>7</td>
                </tr>
                </tbody>
            </table>
        </md-content>

    </section>
</div>