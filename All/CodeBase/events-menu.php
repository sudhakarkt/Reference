<?php
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();

?>
<!-- Side Menu -->
        <div class="right-side">
            <ul class="right-menu">
                <li <?php if($current_page === 'index.php'):?>class="active"<?php endif;?>><a href="index.php"><span class="menu-item">Event Details</span></a><span class="menu-icon"><img src="images/menu-icons/event-details.svg" /></span></li>
                <li <?php if($current_page === 'participating-teams.php'):?>class="active"<?php endif;?>><a href="participating-teams.php"><span class="menu-item">Participating Teams</span></a><span class="menu-icon"><img src="images/menu-icons/participating-teams.svg" /></span></li>
                <li <?php if($current_page === 'event-checklist-main.php'):?>class="active"<?php endif;?>><a href="event-checklist-main.php"><span class="menu-item">Event Check List</span></a><span class="menu-icon"><img src="images/menu-icons/event-check-list.svg" /></span></li>
                <li <?php if($current_page === 'team-allocation.php'):?>class="active"<?php endif;?>><a href="team-allocation.php"><span class="menu-item">Team Allocation</span></a><span class="menu-icon"><img src="images/menu-icons/team-allocation.svg" /></span></li>
                <li <?php if($current_page === 'zone-allocation.php'):?>class="active"<?php endif;?>><a href="zone-allocation.php"><span class="menu-item">Zone Allocation</span></a><span class="menu-icon"><img src="images/menu-icons/zone-allocation.svg" /></span></li>
                <li <?php if($current_page === 'itinerary-plan.php'):?>class="active"<?php endif;?>><a href="itinerary-plan.php"><span class="menu-item">Itinerary Plan</span></a><span class="menu-icon"><img src="images/menu-icons/itinerary-plan.svg" /></span></li>
                <li <?php if($current_page === 'steward-requested.php'):?>class="active"<?php endif;?>><a href="steward-requested.php"><span class="menu-item">Steward Requested</span></a><span class="menu-icon"><img src="images/menu-icons/steward-requested.svg" /></span></li>
                <li <?php if($current_page === 'briefing-document.php'):?>class="active"<?php endif;?>><a href="briefing-document.php"><span class="menu-item">Briefing Documents</span></a><span class="menu-icon"><img src="images/menu-icons/briefing-documents.svg" /></span></li>
                <li <?php if($current_page === 'event-peaps-rules.php'):?>class="active"<?php endif;?>><a href="event-peaps-rules.php"><span class="menu-item">Event PEAP's Rules</span></a><span class="menu-icon"><img src="images/menu-icons/event-PEAPs-rules.svg" /></span></li>
                <li <?php if($current_page === 'steward-management.php'):?>class="active"<?php endif;?>><a href="steward-management.php"><span class="menu-item">Steward Management</span></a><span class="menu-icon"><img src="images/menu-icons/steward-management.svg" /></span></li>
                <li <?php if($current_page === 'steward-allocation.php'):?>class="active"<?php endif;?>><a href="steward-allocation.php"><span class="menu-item">Steward Allocation</span></a><span class="menu-icon"><img src="images/menu-icons/steward-allocation.svg" /></span></li>
            </ul>
        </div>
