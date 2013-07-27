<h3>Building nesemu2 from source.</h3>
<p>Simple instructions for building nesemu2 from source.</p>
<ul>
  <li>Step 1:  Get the source.</li>
  <li>Step 2:  Build nesemu2.</li>
  <li>Step 3:  Copy optional data.</li>
</ul>
<hr/>
<h3>Step 1:  Get the source.</h3>
<p>To get the latest source, ensure you have git installed and clone the repository.</p>
<pre>
  $ git clone git@github.com:holodnak/nesemu2.git
</pre>
<p>This will download the source to the current directory in a directory named 'nesemu2'.</p>
<hr/>
<h3>Step 2:  Build nesemu2.</h3>
<p>Change to the directory of the source and build it by issuing the 'make' command.</p>
<pre>
  $ cd nesemu2
  $ make
</pre>
<p>To build the SDL target, no additional options are required.  If you are on Win32 (or are trying
  to cross-compile for it) you should use OSTARGET=WIN32 to force the makefile to use the Win32 setup
  and also you need to use USESDL=0 to disable SDL and build it using the Win32 API.</p>
<hr/>
<h3>Step 3:  Install nesemu2 and its data.</h3>
<p>nesemu2 comes with additional data in the repository such as:</p>
<ul>
  <li><b>HLE FDS BIOS</b> - BIOS to enable the HLE features for FDS emulation.</li>
  <li><b>NSF BIOS</b> - This is required for playback of NSF files.</li>
  <li><b>Game Genie ROM</b> - This is required for emulating the game genie.</li>
  <li><b>Palettes</b> - Optional palettes from the past.</li>
  <li><b><a href="http://bootgod.dyndns.org:7777/">NesCartDB</a> XML</b> - Cart Database XML files.</li>
</ul>
<p>All of this data is contained in the 'resources' directory.  Running the following command will
  install nesemu2 and the included data.</p>
<pre>
  $ make install
</pre>