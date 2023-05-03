<?php
/**
 * Boot the Framework
 *
 * @package   Generosity
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/generosity
 */

# ----------------------------------------------------------------------------------
# Create a new application.
# ----------------------------------------------------------------------------------
#
# This code creates the one true instance of the Backdrop Core Application, which can
# be access via the `Backdrop\app();` function or the `Backdrop\App` static class after
# the application has been booted.

$generosity = Backdrop\booted() ? Backdrop\app() : new Backdrop\Core\Application();

# ------------------------------------------------------------------------------
# Register default service providers with the application.
# ------------------------------------------------------------------------------
#
# Here are the default service providers that are essential for the theme to function
# before booting the application. These service providers form the foundation for the
# theme.

$generosity->provider( Backdrop\Fonts\Provider::class );
$generosity->provider( Backdrop\FontAwesome\Provider::class );
$generosity->provider( Backdrop\Mix\Manifest\Provider::class );
$generosity->provider( Backdrop\Template\Hierarchy\Provider::class );
$generosity->provider( Backdrop\Template\Manager\Provider::class );
$generosity->provider( Backdrop\Template\View\Provider::class );

# ------------------------------------------------------------------------------
# Register additional service providers for the theme.
# ------------------------------------------------------------------------------
#
# These are the additional service providers that are crucial for the theme to
# operate before booting the application. These providers offer supplementary
# features to the theme.

// $generosity->provider( Succotash\Menu\Provider::class );
// $generosity->provider( Succotash\Sidebar\Provider::class );

# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# This code creates an action hook that child themes or plugins can utilize to
# integrate their own binding into the bootstrap process before the app is booted.
# The action callback receives the application instance as a parameter.

do_action( 'mythic/bootstrap', $generosity );

# ------------------------------------------------------------------------------
# Bootstrap the application.
# ------------------------------------------------------------------------------
#
# The code invokes the `boot();` method of the application, which initiates the
# launch of the application. Congratulations on a job well done!

$generosity->boot();
