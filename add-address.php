<div class="row">
    <form ng-controller="FormController" novalidate>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" ng-required="true">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>