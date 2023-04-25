<template>
    <div class="head-table">
        <div>
            <h1>{{ label }}</h1>
        </div>
        <div>
            <button class="btn">{{ button }}</button>
        </div>
    </div>
  </template>
    
    <script>
    export default {
      name: "HeadTableComponent",
      props: ["label", "button"]
    }
    </script>
    
    <style scoped>
        .head-table {
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: space-between;
            margin: 50px 0 15px;
        }

        .btn {
            font-size: 14px;
            padding: 6px 12px;
            margin-bottom: 0;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            white-space: nowrap;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 10px;
            background: #00a6e8;
            color: #fff;
        }

        .btn:hover, .btn:focus {
            background-color: #004c6d;
            color: #eee;
            text-decoration: none;
        }
    </style>