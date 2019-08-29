<?php
require_once './function/common.php';
require_once 'kannsuu.php';
require_once './function/DbManager.php';
//ヘッダーを呼び出し
head();
?>
<link rel="stylesheet" type="text/css" href="main.css">
<title>オリキャラバトル</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<div class="col-12 boxB">
<?php navvar(); ?>


<br>
<br>
<h1>各種データ</h1>

    <br>
    <br>
    ステータスと効果
    <table class="table-striped" border="1">
    <tr>
    <td>ステータス</td>
    <td>効果</td>
    </tr>
    <tr>
    <td>HP</td>
    <td>キャラクターのHPです。高いほど相手の攻撃に耐えます。</td>
    </tr>
    <tr>
    <td>攻撃力</td>
    <td>キャラクターの攻撃力です。高いほど相手に与えるダメージが大きくなります。</td>
    </tr>
    <tr>
    <td>防御力</td>
    <td>キャラクターの防御力です。高いほどキャラクターの受けるダメージが低くなります。</td>
    </tr>
    <tr>
    <td>素早さ</td>
    <td>キャラクターの素早さです。高いほど相手の攻撃を避けやすくなります。<br>また、素早さが相手より高いと先制攻撃をすることができます。</td>
    </tr>
    </table>

    <br>
	<br>
	特殊能力
    <table class="table-striped" border="1">
<tr>
 <td>特殊能力</td>
 <td>効果</td>
</tr>
<tr>
 <td>驚異の生命力</td>
 <td>HPを上げるのに必要な経験値が下がります。</td>
</tr>
<tr>
 <td>狂戦士</td>
 <td>攻撃力を上げるのに必要な経験値が下がります。</td>
</tr>
<tr>
 <td>鉄壁</td>
 <td>防御力を上げるのに必要な経験値が下がります。</td>
</tr>
<tr>
 <td>韋駄天</td>
 <td>素早さを上げるのに必要な経験値が下がります。</td>
</tr>
<tr>
 <td>先手必勝</td>
 <td>毎回先制攻撃ができます。</td>
</tr>
<tr>
 <td>自己再生</td>
 <td>HPが半分以下になると回復する。</td>
</tr>
<tr>
 <td>疾風怒涛</td>
 <td>一定確率で連続攻撃します。</td>
</tr>
</table>

    <br>
    <br>
    必殺技習得レベル：Lv.３
	<br>
	特殊能力習得レベル：Lv.５
	<br>
    超必殺技習得レベル：Lv.２０
	<br>
	<br>
	対戦相手選択画面
	<br>
	対戦相手を選択します。キャラクターの現在のレベルの±10までの相手の中からランダムで対戦相手を選びます。
	<br>
<br>
レベルアップ必要勝利数早見表
	<table class="table-striped" border="1">
 <tr>
  <td>レベル</td>
  <td>補正値</td>
  <td>次レベルアップまで</td>
  <td>勝利数</td>
  <td>範囲1</td>
  <td>範囲2</td>
 </tr>
 <tr>
  <td>1</td>
  <td>0</td>
  <td>3</td>
  <td>3</td>
  <td>1</td>
  <td>3</td>
 </tr>
 <tr>
  <td>2</td>
  <td>0</td>
  <td>3</td>
  <td>6</td>
  <td>4</td>
  <td>6</td>
 </tr>
 <tr>
  <td>3</td>
  <td>0</td>
  <td>3</td>
  <td>9</td>
  <td>7</td>
  <td>9</td>
 </tr>
 <tr>
  <td>4</td>
  <td>1</td>
  <td>4</td>
  <td>13</td>
  <td>10</td>
  <td>13</td>
 </tr>
 <tr>
  <td>5</td>
  <td>1</td>
  <td>4</td>
  <td>17</td>
  <td>14</td>
  <td>17</td>
 </tr>
 <tr>
  <td>6</td>
  <td>1</td>
  <td>4</td>
  <td>21</td>
  <td>18</td>
  <td>21</td>
 </tr>
 <tr>
  <td>7</td>
  <td>2</td>
  <td>5</td>
  <td>26</td>
  <td>22</td>
  <td>26</td>
 </tr>
 <tr>
  <td>8</td>
  <td>2</td>
  <td>5</td>
  <td>31</td>
  <td>27</td>
  <td>31</td>
 </tr>
 <tr>
  <td>9</td>
  <td>2</td>
  <td>5</td>
  <td>36</td>
  <td>32</td>
  <td>36</td>
 </tr>
 <tr>
  <td>10</td>
  <td>3</td>
  <td>6</td>
  <td>42</td>
  <td>37</td>
  <td>42</td>
 </tr>
 <tr>
  <td>11</td>
  <td>3</td>
  <td>6</td>
  <td>48</td>
  <td>43</td>
  <td>48</td>
 </tr>
 <tr>
  <td>12</td>
  <td>3</td>
  <td>6</td>
  <td>54</td>
  <td>49</td>
  <td>54</td>
 </tr>
 <tr>
  <td>13</td>
  <td>4</td>
  <td>7</td>
  <td>61</td>
  <td>55</td>
  <td>61</td>
 </tr>
 <tr>
  <td>14</td>
  <td>4</td>
  <td>7</td>
  <td>68</td>
  <td>62</td>
  <td>68</td>
 </tr>
 <tr>
  <td>15</td>
  <td>4</td>
  <td>7</td>
  <td>75</td>
  <td>69</td>
  <td>75</td>
 </tr>
 <tr>
  <td>16</td>
  <td>5</td>
  <td>8</td>
  <td>83</td>
  <td>76</td>
  <td>83</td>
 </tr>
 <tr>
  <td>17</td>
  <td>5</td>
  <td>8</td>
  <td>91</td>
  <td>84</td>
  <td>91</td>
 </tr>
 <tr>
  <td>18</td>
  <td>5</td>
  <td>8</td>
  <td>99</td>
  <td>92</td>
  <td>99</td>
 </tr>
 <tr>
  <td>19</td>
  <td>6</td>
  <td>9</td>
  <td>108</td>
  <td>100</td>
  <td>108</td>
 </tr>
 <tr>
  <td>20</td>
  <td>6</td>
  <td>9</td>
  <td>117</td>
  <td>109</td>
  <td>117</td>
 </tr>
 <tr>
  <td>21</td>
  <td>6</td>
  <td>9</td>
  <td>126</td>
  <td>118</td>
  <td>126</td>
 </tr>
 <tr>
  <td>22</td>
  <td>7</td>
  <td>10</td>
  <td>136</td>
  <td>127</td>
  <td>136</td>
 </tr>
 <tr>
  <td>23</td>
  <td>7</td>
  <td>10</td>
  <td>146</td>
  <td>137</td>
  <td>146</td>
 </tr>
 <tr>
  <td>24</td>
  <td>7</td>
  <td>10</td>
  <td>156</td>
  <td>147</td>
  <td>156</td>
 </tr>
 <tr>
  <td>25</td>
  <td>8</td>
  <td>11</td>
  <td>167</td>
  <td>157</td>
  <td>167</td>
 </tr>
 <tr>
  <td>26</td>
  <td>8</td>
  <td>11</td>
  <td>178</td>
  <td>168</td>
  <td>178</td>
 </tr>
 <tr>
  <td>27</td>
  <td>8</td>
  <td>11</td>
  <td>189</td>
  <td>179</td>
  <td>189</td>
 </tr>
 <tr>
  <td>28</td>
  <td>9</td>
  <td>12</td>
  <td>201</td>
  <td>190</td>
  <td>201</td>
 </tr>
 <tr>
  <td>29</td>
  <td>9</td>
  <td>12</td>
  <td>213</td>
  <td>202</td>
  <td>213</td>
 </tr>
 <tr>
  <td>30</td>
  <td>9</td>
  <td>12</td>
  <td>225</td>
  <td>214</td>
  <td>225</td>
 </tr>
</table>
※キャラクターのレベルは勝利数に応じて上がる仕様になっています。
<br>
※対戦数やレベルなどは勝負を挑まれた相手に勝利・敗北しても反映されます。
<br>
<br>
<br>
能力アップ必要経験値早見表
<br>
<table class="table-striped" border="1">
 <tr>
  <td>ＨＰ</td>
  <td>必要値</td>
  <td>攻撃力</td>
  <td>必要値</td>
  <td>防御力</td>
  <td>必要値</td>
  <td>素早さ</td>
  <td>必要値</td>
 </tr>
 <tr>
  <td>1</td>
  <td>1</td>
  <td>1</td>
  <td>1</td>
  <td>1</td>
  <td>1</td>
  <td>1</td>
  <td>1</td>
 </tr>
 <tr>
  <td>2</td>
  <td>1</td>
  <td>2</td>
  <td>1</td>
  <td>2</td>
  <td>1</td>
  <td>2</td>
  <td>1</td>
 </tr>
 <tr>
  <td>3</td>
  <td>1</td>
  <td>3</td>
  <td>1</td>
  <td>3</td>
  <td>1</td>
  <td>3</td>
  <td>1</td>
 </tr>
 <tr>
  <td>4</td>
  <td>1</td>
  <td>4</td>
  <td>1</td>
  <td>4</td>
  <td>1</td>
  <td>4</td>
  <td>1</td>
 </tr>
 <tr>
  <td>5</td>
  <td>1</td>
  <td>5</td>
  <td>1</td>
  <td>5</td>
  <td>1</td>
  <td>5</td>
  <td>1</td>
 </tr>
 <tr>
  <td>6</td>
  <td>1</td>
  <td>6</td>
  <td>1</td>
  <td>6</td>
  <td>2</td>
  <td>6</td>
  <td>1</td>
 </tr>
 <tr>
  <td>7</td>
  <td>1</td>
  <td>7</td>
  <td>1</td>
  <td>7</td>
  <td>2</td>
  <td>7</td>
  <td>1</td>
 </tr>
 <tr>
  <td>8</td>
  <td>1</td>
  <td>8</td>
  <td>2</td>
  <td>8</td>
  <td>2</td>
  <td>8</td>
  <td>1</td>
 </tr>
 <tr>
  <td>9</td>
  <td>1</td>
  <td>9</td>
  <td>2</td>
  <td>9</td>
  <td>2</td>
  <td>9</td>
  <td>2</td>
 </tr>
 <tr>
  <td>10</td>
  <td>1</td>
  <td>10</td>
  <td>2</td>
  <td>10</td>
  <td>2</td>
  <td>10</td>
  <td>2</td>
 </tr>
 <tr>
  <td>11</td>
  <td>2</td>
  <td>11</td>
  <td>2</td>
  <td>11</td>
  <td>3</td>
  <td>11</td>
  <td>2</td>
 </tr>
 <tr>
  <td>12</td>
  <td>2</td>
  <td>12</td>
  <td>2</td>
  <td>12</td>
  <td>3</td>
  <td>12</td>
  <td>2</td>
 </tr>
 <tr>
  <td>13</td>
  <td>2</td>
  <td>13</td>
  <td>2</td>
  <td>13</td>
  <td>3</td>
  <td>13</td>
  <td>2</td>
 </tr>
 <tr>
  <td>14</td>
  <td>2</td>
  <td>14</td>
  <td>2</td>
  <td>14</td>
  <td>3</td>
  <td>14</td>
  <td>2</td>
 </tr>
 <tr>
  <td>15</td>
  <td>2</td>
  <td>15</td>
  <td>3</td>
  <td>15</td>
  <td>3</td>
  <td>15</td>
  <td>2</td>
 </tr>
 <tr>
  <td>16</td>
  <td>2</td>
  <td>16</td>
  <td>3</td>
  <td>16</td>
  <td>4</td>
  <td>16</td>
  <td>2</td>
 </tr>
 <tr>
  <td>17</td>
  <td>2</td>
  <td>17</td>
  <td>3</td>
  <td>17</td>
  <td>4</td>
  <td>17</td>
  <td>3</td>
 </tr>
 <tr>
  <td>18</td>
  <td>2</td>
  <td>18</td>
  <td>3</td>
  <td>18</td>
  <td>4</td>
  <td>18</td>
  <td>3</td>
 </tr>
 <tr>
  <td>19</td>
  <td>2</td>
  <td>19</td>
  <td>3</td>
  <td>19</td>
  <td>4</td>
  <td>19</td>
  <td>3</td>
 </tr>
 <tr>
  <td>20</td>
  <td>2</td>
  <td>20</td>
  <td>3</td>
  <td>20</td>
  <td>4</td>
  <td>20</td>
  <td>3</td>
 </tr>
 <tr>
  <td>21</td>
  <td>3</td>
  <td>21</td>
  <td>3</td>
  <td>21</td>
  <td>5</td>
  <td>21</td>
  <td>3</td>
 </tr>
 <tr>
  <td>22</td>
  <td>3</td>
  <td>22</td>
  <td>4</td>
  <td>22</td>
  <td>5</td>
  <td>22</td>
  <td>3</td>
 </tr>
 <tr>
  <td>23</td>
  <td>3</td>
  <td>23</td>
  <td>4</td>
  <td>23</td>
  <td>5</td>
  <td>23</td>
  <td>3</td>
 </tr>
 <tr>
  <td>24</td>
  <td>3</td>
  <td>24</td>
  <td>4</td>
  <td>24</td>
  <td>5</td>
  <td>24</td>
  <td>3</td>
 </tr>
 <tr>
  <td>25</td>
  <td>3</td>
  <td>25</td>
  <td>4</td>
  <td>25</td>
  <td>5</td>
  <td>25</td>
  <td>4</td>
 </tr>
 <tr>
  <td>26</td>
  <td>3</td>
  <td>26</td>
  <td>4</td>
  <td>26</td>
  <td>6</td>
  <td>26</td>
  <td>4</td>
 </tr>
 <tr>
  <td>27</td>
  <td>3</td>
  <td>27</td>
  <td>4</td>
  <td>27</td>
  <td>6</td>
  <td>27</td>
  <td>4</td>
 </tr>
 <tr>
  <td>28</td>
  <td>3</td>
  <td>28</td>
  <td>4</td>
  <td>28</td>
  <td>6</td>
  <td>28</td>
  <td>4</td>
 </tr>
 <tr>
  <td>29</td>
  <td>3</td>
  <td>29</td>
  <td>5</td>
  <td>29</td>
  <td>6</td>
  <td>29</td>
  <td>4</td>
 </tr>
 <tr>
  <td>30</td>
  <td>3</td>
  <td>30</td>
  <td>5</td>
  <td>30</td>
  <td>6</td>
  <td>30</td>
  <td>4</td>
 </tr>
</table>
<br>
※対戦中のダメージ計算式、能力アップの条件などは変更となることがあります。あらかじめご了承ください。
<br>
<br>



</div>
</body>
</html>