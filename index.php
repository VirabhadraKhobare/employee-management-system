<!DOCTYPE html>
<html>
    <head>
        <title>Employee Management System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container mt-5">
            <h2 class="text-center mb-4">
                Employee Management System
            </h2>

            <div class="card p-4 mb-4">
                <h4 id="formTitle"> Add Employee </h4>

                <form id="employeeForm">
                    <input type="hidden" id="employee_id">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Full Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email ID" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Mobile</label>
                            <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Department</label>
                            <select class="form-control" id="department" required>
                                <option value="">Select Department</option>
                                <option value="HR">HR</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="Sales">Sales</option>
                                <option value="Marketing">Marketing</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Salary</label>
                            <input type="number" class="form-control" id="salary" placeholder="Enter Salary" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Joining Date</label>
                            <input type="date" class="form-control" id="joining_date" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Status</label>
                            <select class="form-control" id="status" required>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" id="saveButton">Save Employee</button>
                    <button type="button" class="btn btn-secondary" id="cancelButton">Cancel</button>

                </form>
            </div>

            <div id="message"></div>

            <div class="card p-4">
                <h4>Employee List</h4>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Department</th>
                                <th>Salary</th>
                                <th>Joining Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        
                        <tbody id="employeeTable">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="script.js"></script>

    </body>

</html>