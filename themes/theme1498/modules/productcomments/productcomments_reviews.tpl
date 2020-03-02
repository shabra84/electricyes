<div class="comments_note">
	<div class="star_content clearfix">
	{section name="i" start=0 loop=5 step=1}
		{if $averageTotal le $smarty.section.i.index}
			<i class="fl-outicons-star6"></i>
		{else}
			<i class="fl-outicons-star6 grade"></i>
		{/if}
	{/section}
	</div>
</div>