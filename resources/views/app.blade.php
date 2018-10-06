<!DOCTYPE html>
<html lang="en">
<head>
    @include("inc.head")
</head>
<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
        @include("inc.header")
        @include("inc.sidebar")
        @section("adminHome-content")
            @show
    </div>
    @include("inc.footer")
</body>
</html>