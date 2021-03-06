<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="structjpeg__error__mgr-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">jpeg_error_mgr Struct Reference</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ad6c1713c54424636208abbade52874e4"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ad6c1713c54424636208abbade52874e4"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>JMETHOD</b> (void, error_exit,(<a class="el" href="structjpeg__common__struct.php">j_common_ptr</a> cinfo))</td></tr>
<tr class="separator:ad6c1713c54424636208abbade52874e4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a73c0a027b6e6cb8ff2b7b0fc42f756f9"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a73c0a027b6e6cb8ff2b7b0fc42f756f9"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>JMETHOD</b> (void, emit_message,(<a class="el" href="structjpeg__common__struct.php">j_common_ptr</a> cinfo, int msg_level))</td></tr>
<tr class="separator:a73c0a027b6e6cb8ff2b7b0fc42f756f9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac2989f8ef34acdd78ce26a9110a1c094"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac2989f8ef34acdd78ce26a9110a1c094"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>JMETHOD</b> (void, output_message,(<a class="el" href="structjpeg__common__struct.php">j_common_ptr</a> cinfo))</td></tr>
<tr class="separator:ac2989f8ef34acdd78ce26a9110a1c094"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5f1dfb51c337c36ae1bc5fae7f84528f"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a5f1dfb51c337c36ae1bc5fae7f84528f"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>JMETHOD</b> (void, format_message,(<a class="el" href="structjpeg__common__struct.php">j_common_ptr</a> cinfo, char *buffer))</td></tr>
<tr class="separator:a5f1dfb51c337c36ae1bc5fae7f84528f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac676478083167b3731995d7901bd4b6c"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ac676478083167b3731995d7901bd4b6c"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>JMETHOD</b> (void, reset_error_mgr,(<a class="el" href="structjpeg__common__struct.php">j_common_ptr</a> cinfo))</td></tr>
<tr class="separator:ac676478083167b3731995d7901bd4b6c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a27fcf9391530acf9075836c5d11fff00"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a27fcf9391530acf9075836c5d11fff00"></a>
int&#160;</td><td class="memItemRight" valign="bottom"><b>msg_code</b></td></tr>
<tr class="separator:a27fcf9391530acf9075836c5d11fff00"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2be65b75f8587ac7e84971a58a43e54e"><td class="memItemLeft" ><a class="anchor" id="a2be65b75f8587ac7e84971a58a43e54e"></a>
union {</td></tr>
<tr class="memitem:ac8f3bf1b7d7df10be155995a2012b582"><td class="memItemLeft" >&#160;&#160;&#160;int&#160;&#160;&#160;<b>i</b> [8]</td></tr>
<tr class="separator:ac8f3bf1b7d7df10be155995a2012b582"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abc23e844dc10d9c4f9b24541b92e4080"><td class="memItemLeft" >&#160;&#160;&#160;char&#160;&#160;&#160;<b>s</b> [JMSG_STR_PARM_MAX]</td></tr>
<tr class="separator:abc23e844dc10d9c4f9b24541b92e4080"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2be65b75f8587ac7e84971a58a43e54e"><td class="memItemLeft" valign="top">}&#160;</td><td class="memItemRight" valign="bottom"><b>msg_parm</b></td></tr>
<tr class="separator:a2be65b75f8587ac7e84971a58a43e54e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a77328bf266cc3c3c4d9741fc27a4ef9b"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a77328bf266cc3c3c4d9741fc27a4ef9b"></a>
int&#160;</td><td class="memItemRight" valign="bottom"><b>trace_level</b></td></tr>
<tr class="separator:a77328bf266cc3c3c4d9741fc27a4ef9b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6d74f34ca06fd61c9cc2b5818d317255"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6d74f34ca06fd61c9cc2b5818d317255"></a>
long&#160;</td><td class="memItemRight" valign="bottom"><b>num_warnings</b></td></tr>
<tr class="separator:a6d74f34ca06fd61c9cc2b5818d317255"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aeaa5c5dc26052bd7e367ceb35f670beb"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aeaa5c5dc26052bd7e367ceb35f670beb"></a>
const char *const *&#160;</td><td class="memItemRight" valign="bottom"><b>jpeg_message_table</b></td></tr>
<tr class="separator:aeaa5c5dc26052bd7e367ceb35f670beb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a01d4d8f17f2d2ad49e5bd981c01296b9"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a01d4d8f17f2d2ad49e5bd981c01296b9"></a>
int&#160;</td><td class="memItemRight" valign="bottom"><b>last_jpeg_message</b></td></tr>
<tr class="separator:a01d4d8f17f2d2ad49e5bd981c01296b9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af327179ad6b8d663a173e25615257e33"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af327179ad6b8d663a173e25615257e33"></a>
const char *const *&#160;</td><td class="memItemRight" valign="bottom"><b>addon_message_table</b></td></tr>
<tr class="separator:af327179ad6b8d663a173e25615257e33"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a35a1536b1171bb13510b5156ffa0af05"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a35a1536b1171bb13510b5156ffa0af05"></a>
int&#160;</td><td class="memItemRight" valign="bottom"><b>first_addon_message</b></td></tr>
<tr class="separator:a35a1536b1171bb13510b5156ffa0af05"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a67531ea98e366e64d5b348446d50e806"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a67531ea98e366e64d5b348446d50e806"></a>
int&#160;</td><td class="memItemRight" valign="bottom"><b>last_addon_message</b></td></tr>
<tr class="separator:a67531ea98e366e64d5b348446d50e806"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock">
<p>Definition at line <a class="el" href="jpeglib_8h_source.php#l00682">682</a> of file <a class="el" href="jpeglib_8h_source.php">jpeglib.h</a>.</p>
</div><hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="jpeglib_8h_source.php">jpeglib.h</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
