$(document).ready(function () {

    loadEmployees();

    // Load employees
    function loadEmployees() {

        $.ajax({
            url: "ajax.php",
            type: "POST",
            dataType: "json",
            data: { action: "list" },

            success: function (data) {
                var html = "";
                $.each(data, function (i, employee) {

                    html += "<tr>";
                    html += "<td>" + employee.id + "</td>";
                    html += "<td>" + employee.name + "</td>";
                    html += "<td>" + employee.email + "</td>";
                    html += "<td>" + employee.mobile + "</td>";
                    html += "<td>" + employee.department + "</td>";
                    html += "<td>" + employee.salary + "</td>";
                    html += "<td>" + employee.joining_date + "</td>";
                    html += "<td>" + employee.status + "</td>";

                    html += "<td>";
                    html += "<button class='btn btn-warning btn-sm editBtn' data-id='" + employee.id + "'>Edit</button> ";
                    html += "<button class='btn btn-danger btn-sm deleteBtn' data-id='" + employee.id + "'>Delete</button>";
                    html += "</td>";

                    html += "</tr>";
                });
                $("#employeeTable").html(html);
            }
        });
    }

    // Add / Update
    $("#employeeForm").submit(function (e) {
        e.preventDefault();
        var id = $("#employee_id").val();

        $.ajax({
            url: "ajax.php",
            type: "POST",
            data: {
                action: id ? "update" : "add",
                id: id,
                name: $("#name").val(),
                email: $("#email").val(),
                mobile: $("#mobile").val(),
                department: $("#department").val(),
                salary: $("#salary").val(),
                joining_date: $("#joining_date").val(),
                status: $("#status").val()
            },

            success: function (response) {
                $("#message").html(
                    "<div class='alert alert-success'>" + response + "</div>"
                );
                loadEmployees();
                clearForm();
            }
        });
    });


    // Edit
    $(document).on("click", ".editBtn", function () {

        $.ajax({
            url: "ajax.php",
            type: "POST",
            dataType: "json",

            data: {
                action: "get",
                id: $(this).data("id")
            },

            success: function (employee) {
                $("#employee_id").val(employee.id);
                $("#name").val(employee.name);
                $("#email").val(employee.email);
                $("#mobile").val(employee.mobile);
                $("#department").val(employee.department);
                $("#salary").val(employee.salary);
                $("#joining_date").val(employee.joining_date);
                $("#status").val(employee.status);

                $("#formTitle").text("Edit Employee");
                $("#saveButton").text("Update Employee");
            }
        });
    });


    // Delete
    $(document).on("click", ".deleteBtn", function () {
        if (confirm("Delete this employee?")) {

            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: {
                    action: "delete",
                    id: $(this).data("id")
                },
                success: function (response) {
                    $("#message").html(
                        "<div class='alert alert-success'>" + response + "</div>"
                    );
                    loadEmployees();
                }
            });
        }
    });


    // Clear form
    function clearForm() {
        $("#employeeForm")[0].reset();
        $("#employee_id").val("");
        $("#formTitle").text("Add Employee");
        $("#saveButton").text("Save Employee");
    }
    $("#cancelButton").click(clearForm);
});