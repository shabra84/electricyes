<?php
/* Smarty version 3.1.32, created on 2019-11-25 17:59:32
  from '/home/nuevaelectricyes/public_html/themes/theme1498/templates/electro/parent_input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddc08742855c2_96806915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '017b1555a4eb8313a337b5722f82794c1933ef8e' => 
    array (
      0 => '/home/nuevaelectricyes/public_html/themes/theme1498/templates/electro/parent_input.tpl',
      1 => 1542921251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc08742855c2_96806915 (Smarty_Internal_Template $_smarty_tpl) {
?>					// Removes folding icon for relative children
				graph.isCellFoldable = function(cell, collapse)
				{
					var childCount = this.model.getChildCount(cell);
					
					for (var i = 0; i < childCount; i++)
					{
						var child = this.model.getChildAt(cell, i);
						var geo = this.getCellGeometry(child);
						
						if (geo != null && geo.relative)
						{
							return false;
						}
					}
					
					return childCount > 0;
				};
				
				// Returns the relative position of the given child
				function getRelativePosition(state, dx, dy)
				{
					if (state != null)
					{
						var model = graph.getModel();
						var geo = model.getGeometry(state.cell);
						
						if (geo != null && geo.relative && !model.isEdge(state.cell))
						{
							var parent = model.getParent(state.cell);
							
							if (model.isVertex(parent))
							{
								var pstate = graph.view.getState(parent);
								
								if (pstate != null)
								{
									var scale = graph.view.scale;
									var x = state.x + dx;
									var y = state.y + dy;
									
									if (geo.offset != null)
									{
										x -= geo.offset.x * scale;
										y -= geo.offset.y * scale;
									}
									
									x = (x - pstate.x) / pstate.width;
									y = (y - pstate.y) / pstate.height;
									
									if (Math.abs(y - 0.5) <= Math.abs((x - 0.5) / 2))
									{
										x = (x > 0.5) ? 1 : 0;
										y = Math.min(1, Math.max(0, y));
									}
									else
									{
										x = Math.min(1, Math.max(0, x));
										y = (y > 0.5) ? 1 : 0;
									}
									
									return new mxPoint(x, y);
								}
							}
						}
					}
					
					return null;
				};
				
				// Replaces translation for relative children
				graph.translateCell = function(cell, dx, dy)
				{
					var rel = getRelativePosition(this.view.getState(cell), dx * graph.view.scale, dy * graph.view.scale);
					
					if (rel != null)
					{
						var geo = this.model.getGeometry(cell);
						
						if (geo != null && geo.relative)
						{
							geo = geo.clone();
							geo.x = rel.x;
							geo.y = rel.y;
							
							this.model.setGeometry(cell, geo);
						}
					}
					else
					{
						mxGraph.prototype.translateCell.apply(this, arguments);
					}
				};
				
				// Replaces move preview for relative children
				graph.graphHandler.getDelta = function(me)
				{
					var point = mxUtils.convertPoint(this.graph.container, me.getX(), me.getY());
					var delta = new mxPoint(point.x - this.first.x, point.y - this.first.y);
					
					if (this.cells != null && this.cells.length > 0 && this.cells[0] != null)
					{
						var state = this.graph.view.getState(this.cells[0]);
						var rel = getRelativePosition(state, delta.x, delta.y);
						
						if (rel != null)
						{
							var pstate = this.graph.view.getState(this.graph.model.getParent(state.cell));
							
							if (pstate != null)
							{
								delta = new mxPoint(pstate.x + pstate.width * rel.x - state.getCenterX(),
										pstate.y + pstate.height * rel.y - state.getCenterY());
							}
						}
					}
					
					return delta;
				};
				
				// Relative children cannot be removed from parent
				graph.graphHandler.shouldRemoveCellsFromParent = function(parent, cells, evt)
				{
					return cells.length == 0 && !cells[0].geometry.relative && mxGraphHandler.prototype.shouldRemoveCellsFromParent.apply(this, arguments);
				};
				
				// Enables moving of relative children
				graph.isCellLocked = function(cell)
				{
					return false;
				};

				// Enables rubberband selection
				new mxRubberband(graph);
				
				// Gets the default parent for inserting new cells. This
				// is normally the first child of the root (ie. layer 0).
				var parent = graph.getDefaultParent();

<?php }
}
