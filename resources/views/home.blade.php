<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
@error('id')
<span>{{ $message }}</span>
<br>
@enderror
@error('employeeRole')
<span>{{ $message }}</span>
<br>
@enderror
@error('salary')
<span>{{ $message }}</span>
<br>
@enderror
@error('startWork')
<span>{{ $message }}</span>
<br>
@enderror
<div class="flex justify-center my-[10%]">
    <div class="px-10 py-4 bg-white">
        <p class="text-3xl">Employee Form</p>
        <form action="{{ route('confirmed.salary') }}" name="employeeform" method="post" class="my-8">
            @csrf
            <div class="flex my-4">
                <p class="mr-4">Employee ID</p>
                <input class="border-black border-2 border-solid" type="text" pattern="\d*" maxlength="5" name="id">
            </div>
            <div class="flex my-4">
                <p class="mr-4">Employee Role</p>
                <select class="border-black border-2 border-solid" name="employeeRole">
                    <option value="jonior">Jonior</option>
                    <option value="senior">Senior</option>
                    <option value="manager">Manager</option>
                </select>
            </div>
            <div class="flex my-4">
                <p class="mr-4">Employee Salary</p>
                <input class="border-black border-2 border-solid" type="number" name="salary" id="salary">
            </div>
            <div class="flex my-4">
                <p class="mr-4">Start Working</p>
                <input class="border-black border-2 border-solid" type="date" name="startWork">
            </div>

            <div class="flex my-4">
                <p class="mr-4">เงินเดือนชดเชยที่จะได้รับ</p>
                <input class="border-black border-2 border-solid" type="text" value="100000" name="startWork" disabled>
            </div>

            <div class="flex my-4">
                <p class="mr-4">ยืนยันรับเงินเดือนชดเชย</p>
                <input type="checkbox" value="true" name="confirmed">
            </div>

            <div class="flex justify-end mt-10">
                <input class="bg-[#fb8b24] hover:bg-[#e36414] py-2 px-4" type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
</body>
<script>
    function salaryCal() {
        var salary = document.getElementById('salary')
        //paymentsalary = ค่าตอบแทน
        var paymentsalary = 0

        if (role = 'jonior' && date >= 60) {
            paymentsalary = salary / 365 * 60
        } else if (role = 'senior') {
            paymentsalary = 3 * (salary / 365 * 60)
        } else if (role = 'manager') {
            paymentsalary = (5 * (salary / 365 * 60)) + (salary / 2)
        } else {
            //คนที่มาทำงานไม่ถึง 60 วัน
            var paymentsalary = 0
        }
    }
</script>
</html>
