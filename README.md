# YourVoice

[![GitHub](https://img.shields.io/badge/GitHub-YourVoice-lightgrey?logo=github)](https://github.com/lsy223622/YourVoice) [![Releases](https://img.shields.io/badge/-Releases-lightgrey?logo=github)](https://github.com/lsy223622/YourVoice/releases) [![JSDelivr](https://data.jsdelivr.com/v1/package/gh/lsy223622/YourVoice/badge?style=rounded)](https://www.jsdelivr.com/package/gh/lsy223622/YourVoice)

---

# 常见问题

## 如何在 YourVoice 上传音频？

&emsp;&emsp;在语音留言查看页面的网址后面加上  `upload.html`

&emsp;&emsp;或是扫描明信片附带纸条上传网址二维码

&emsp;&emsp;请使用电脑或手机浏览器上传 **10 MB** 以内的 **MP3** 格式文件，不要使用微信 QQ 等自带浏览器

## 怎样的输出结果说明上传成功？

&emsp;&emsp;点击 **选择文件** 再点击 **上传** 后，如果上传成功，网页将会显示如下信息：`（以体积为 5,168,738 字节的 demo.mp3 为例）`

<h3>File upload succeeded...</h3>
<ul>
    <li>Sent: demo.mp3
    <li>Size: 5168738 bytes
    <li>Type: audio/mpeg
</ul>

## 微信扫码访问提示非标准端口怎么办？

&emsp;&emsp;不要在意，继续访问就好了

## 如何获得其他附加服务？

### 可以联系 QQ **2413282135** 获得以下服务：

- 更换背景图片、播放器logo
- 禁用上传功能（防止当前已上传的音频被替换）
- 人工上传音频（你真的不会用上面的方法上传吗？）
- 其他服务可询问但不一定提供

---

# 更新日志

## Release v3.2 （ modern + legacy ）

3.2 legacy 相关改进
- legacy 版本改进为单文件 `index.html`
- 使用公用 `resources` 文件夹放置共享静态文件，便于更新修补和节约空间
- 与此同时 `legacyswitch.php` 修改为简单的 php `copy` 函数，增加文字返回消息

## Release v3.1 （ modern + legacy ）

modern + legacy
- **modern** 版本同 3.0
- 新增 **legacy** 版本将静态文件还原为本地实现
- 新增 **legacyswitch** 功能，可一次性切换 modern 版本为 legacy 版本
- 新增 `legacyswitch.php` 使用递归复制算法将 modern 文件替换为 legacy 文件


## Release v3.0

3.0 全新改进！
- 静态文件（除`index.html`以及`voice.mp3`以外）全面部署 CDN
- 优化页面加载速度，提高并发访问能力，提供全球范围接近一致的打开用时
- 界面延续 1.3 版本不变

## Release v2.0

2.0 已被弃用

## Release v1.3

1.3 接近完成
- 其实我也忘了有什么改动
- 这才是第一个正式版本

## Beta v1.2

1.2 基本成型
- 界面大幅度修改

## Beta v1.1

1.1 第一次修改
- 界面小改

## Beta v1.0

1.0 最初版本

- 首次提出语音留言明信片设想并成功实现

---

# 关于

ZZ 学子说语音留言墙

由 *lsy223622* 创作

QQ:*2413282135*

---

## 最后更新时间

`2021-11-19`
