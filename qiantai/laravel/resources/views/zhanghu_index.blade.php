<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<style>
body{background:#ddd;font:14px/1.7 tahoma,'\5fae\8f6f\96c5\9ed1',sans-serif;}
h1,h2,h3{font-size:36px;line-height:1;}
h2{font-size:24px;}
h3{font-size:18px;}
fieldset{margin:2em 0;}
fieldset legend{font-weight:bold;font-size:16px;line-height:2;}
select,button{padding:0.5em;}
a{color:#06f;text-decoration:none;}
a:hover{color:#00f;}
.wrap{width:768;margin:0 auto;padding:10px 50px;}
</style>
</head>
<body>
<div class="wrap">
  <fieldset id="city_china_val">
    <p>所在地区：
      <select class="province other" data-first-title="选择省">
        <option value="">请选择</option>
        <option value="浙江省" selected>浙江省</option>
      </select>
      <select class="city" data-first-title="选择市">
        <option value="">请选择</option>
        <option value="杭州市" selected>杭州市</option>
      </select>
      <select class="area" data-first-title="选择地区">
        <option value="">请选择</option>
        <option value="西湖区" selected>西湖区</option>
      </select>
    </p>
  </fieldset>

<script src="{{url('./style/js/jquery-1.8.2.min.js')}}"></script>
<!-- <script src="http://cdn.staticfile.org/zepto/1.0/zepto.min.js"></script> -->
<script src="{{url('/style/js/jquery.cxselect.min.js')}}"></script>
<script>
(function() {
  var urlChina = '{{url('./style/js/cityData.min.json')}}';
  var urlGlobal = '{{url('./style/js/globalData.min.json')}}';
  var dataCustom = [
    {'v': '1', 'n': '第一级 >', 's': [
      {'v': '2', 'n': '第二级 >', 's': [
        {'v': '3', 'n': '第三级 >', 's': [
          {'v': '4', 'n': '第四级 >', 's': [
            {'v': '5', 'n': '第五级 >', 's': [
              {'v': '6', 'n': '第六级 >'}
            ]}
          ]}
        ]}
      ]}
    ]},
    {'v': 'test number', 'n': '测试数字', 's': [
      {'v': 'text', 'n': '文本类型', 's': [
        {'v': '4', 'n': '4'},
        {'v': '5', 'n': '5'},
        {'v': '6', 'n': '6'},
        {'v': '7', 'n': '7'},
        {'v': '8', 'n': '8'},
        {'v': '9', 'n': '9'},
        {'v': '10', 'n': '10'}
      ]},
      {'v': 'number', 'n': '数值类型', 's': [
        {'v': 11, 'n': 11},
        {'v': 12, 'n': 12},
        {'v': 13, 'n': 13},
        {'v': 14, 'n': 14},
        {'v': 15, 'n': 15},
        {'v': 16, 'n': 16},
        {'v': 17, 'n': 17}
      ]}
    ]},
    {'v': 'test boolean','n': '测试 Boolean 类型', 's': [
      {'v': true ,'n': true},
      {'v': false ,'n': false}
    ]},
    {v: 'test quotes', n: '测试属性不加引号', s: [
      {v: 'quotes', n: '引号'}
    ]},
    {v: 'test other', n: '测试奇怪的值', s: [
      {v: '[]', n: '数组（空）'},
      {v: [1,2,3], n: '数组（数值）'},
      {v: ['a','b','c'], n: '数组（文字）'},
      {v: new Date(), n: '日期'},
      {v: new RegExp('\\d+'), n: '正则对象'},
      {v: /\d+/, n: '正则直接量'},
      {v: {}, n: '对象'},
      {v: document.getElementById('custom_data'), n: 'DOM'},
      {v: null, n: 'Null'},
      {n: '未设置 value'}
    ]},
    {'v': '' , 'n': '无子级'}
  ];

  $.cxSelect.defaults.url = urlChina;



  // 设置默认值及选项标题
  $('#city_china_val').cxSelect({
    selects: ['province', 'city', 'area'],
    emptyStyle: 'none'
  });

 
  


  // cxSelectApi = $.cxSelect(apiBox, {
  //   selects: ['province', 'city', 'area']
  // });

  $('body').on('click', 'button', function() {
    var _name = this.name;
    var _value = this.value;

    switch (_name) {
      case 'attach':
        cxSelectApi.attach();
        break;

      case 'detach':
        cxSelectApi.detach();
        break;

      case 'clear':
        cxSelectApi.clear();
        break;

      case 'required':
        cxSelectApi.setOptions({
          required: _value == 1 ? false : true
        });
        this.value = _value == 1 ? 0 : 1;
        break;

      case 'emptyStyle':
        if (_value === 'none') {
          _value = 'hidden';
        } else if (_value === 'hidden') {
          _value = '';
        } else {
          _value = 'none';
        };
        cxSelectApi.setOptions({
          emptyStyle: _value
        });
        this.value = _value;
        break;

      case 'firstTitle':
        _value = _value === '请选择' ? '选择吧' : '请选择';
        cxSelectApi.setOptions({
          firstTitle: _value
        });
        this.value = _value;
        break;

      case 'setSelect':
        cxSelectApi.setOptions({
          selects: _value === 'a' ? ['province', 'city', 'area'] : ['first', 'second', 'third', 'fourth', 'fifth']
        });
        this.value = _value === 'a' ? 'b' : 'a';
        break;

      case 'setData':
        if (_value === 'china' || _value === 'global') {
          // $.ajax({
          //   url: this.value === 'china' ? urlChina : urlGlobal,
          //   type: 'GET',
          //   dataType: 'json'
          // }).done(function(data, textStatus, jqXHR) {
            cxSelectApi.setOptions({
              url: this.value === 'china' ? urlChina : urlGlobal,
              // data: data
            });
          // }).fail(function(jqXHR, textStatus, errorThrown) {
          // });

        } else if (this.value === 'custom') {
          cxSelectApi.setOptions({
            data: dataCustom
          });
        };
        break;

      // not default
    };
  });
})();
</script>

</body>
</html>
