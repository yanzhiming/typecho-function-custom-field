function themeFields($layout) {
    
    echo '
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        #custom-field{
            font-family: "Noto Sans SC", sans-serif;
            position: fixed;
            z-index:999;
            bottom:0;
            left:0;
            width:100%;
            margin:0;
            padding:0;
            max-height:600px;
            overflow-y:auto;
            transition:display 3s ease-in-out;
            box-shadow:black 0px 0px 10px;
        }
        
        #custom-field::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }
        
        #custom-field::-webkit-scrollbar-thumb {
            background: #999;
        }
        
        #custom-field::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        #custom-field .typecho-list-table{
            display:block;
            width:100%;
            margin:auto;
            padding:15px;
            padding-bottom:30px;
        }
        
        #custom-field #custom-field-expand{
            position: sticky;
            top:0;
            left:0;
            width:calc(100% - 20px);
            padding:5px 10px;
            background-color:#495057;
            border-bottom:2px solid #495057;
            box-shadow:black 0px 0px 10px;
        }
        
        #custom-field #custom-field-expand a,#custom-field #custom-field-expand a:hover, #custom-field #custom-field-expand a:focus{
            color:#f1f1f1;
            text-decoration:none;
            border:none!important;
        }
        
        
        #custom-field td label.typecho-label{
            font-family: "Noto Sans SC", sans-serif;
            font-weight:bold;
            font-size:17px;
            text-align:right;
        }
        
        #custom-field .typecho-list-table tbody tr td{
            box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important
        }
        
        #custom-field tr td div:first-child{
            line-height:30px;
        }
        
        #custom-field tr{
            display:block;
            float:left;
            margin:15px 5px 15px 5px;
            width:100%;
            height:30px;
        }
        
        #custom-field td{
            display:block;
            transition:background-color .3s ease-in-out;
            border:0;
            height:30px
        }
        
        #custom-field td .description{
            position:absolute;
            top:-10px;
            left:-400px;
            font-family: "Noto Sans SC", sans-serif;
            font-size:16px;
            font-weight:bold;
            height:30px;
            padding-left:10px;
            background-color:#495057;
            transition:all .5s ease-in-out;
        }
        
        #custom-field tr:hover td:last-child .description{
            position:absolute;
            left:0;
            transition:all 1s ease-in-out;
        }
        
        #custom-field td:first-child{
            border-radius:.5rem 0 0 .5rem;
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
            width:150px;
            float:left;
            line-height:30px;
        }
        
        #custom-field td:last-child{
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius:0 .5rem .5rem 0;
            width:calc(100% - 150px - 1.5rem);
            float:left;
        }
        
        #custom-field .typecho-list-table tbody tr:hover td:last-child{
            background-color: #fff;
        }
        
        #custom-field input.text{
            font-family: "Noto Sans SC", sans-serif;
            font-size:17px;
            font-weight:bold;
            width:100%;
            color: #495057;
            background-color: #fff;
            border:0;
            padding:0 3px;
        }
        
        
        #custom-field input.text::selection,#custom-field td label.typecho-label::selection {
            color: #fff;
            background: #495057;
        }
        
        #custom-field input.text:focus{
            outline:none
        }
        
        
        #custom-field .description.clearfix{
            display:none;
        }
        
        @media (min-width: 750px){
            #custom-field tr{
                width:calc(50% - 10px);
            }
        }
        @media (min-width: 1000px){
            #custom-field tr{
                width:calc(33.33% - 10px);
            }
        }
        @media (min-width: 1190px){
            #custom-field tr{
                width:calc(25% - 10px);
            }
        }
    </style>
    
    <script>
    window.onload = function(){
        document.getElementById("custom-field").className = "typecho-post-option fold";
    };
    </script>
    ';
}
