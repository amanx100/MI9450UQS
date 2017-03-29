<div layout="column" layout-align="center center" layout-fill>
    <div class="md-whiteframe-4dp" style="width: 500px;">
        <md-toolbar class="md-toolbar-tools">
            <h2>Login!</h2>
        </md-toolbar>
        <md-content layout="column" class="md-padding">
            <form name="userForm" autocomplete="off">
                <md-input-container class="md-block">
                    <label>userid</label>
                    <input type="text" name="userid" ng-model="userid" ng-pattern="/^[0-9]{3}$/" required>
                    <div ng-messages="userForm.userid.$error" role="alert">
                        <div ng-message="required">This field is required!</div>
                        <div ng-message="pattern">This doesn't look like a valid userid!</div>
                    </div>
                </md-input-container>
                <md-input-container class="md-block">
                    <label>password</label>
                    <input type="password" name="userpassword" ng-model="userpassword" required>
                    <div ng-messages="userForm.userpassword.$error" role="alert">
                        <div ng-message="required">This field is required!</div>
                    </div>
                </md-input-container>

                <div layout="row" layout-align="space-between center">
                    <md-button ng-disabled="!userForm.$valid" ng-click="login()" class="md-primary md-raised">Login</md-button>
                    <md-button>Need Help?</md-button>
                </div>
            </form>
        </md-content>
    </div>
</div>