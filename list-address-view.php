    <div class="row">
        <div class="col-md-3 col-md-offset-4"><h1>Address Book</h1></div>
    </div>
    
    <table class="table table-hover table-bordered" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
            </tr>
        </thead>
            
        <tbody>
            <tr ng-repeat="records in addressRecords">
                <td>{{records.name}}</td>
                <td>Sample2</td>
                <td>Sample3</td>
            </tr>
        </tbody>
        

    </table>  