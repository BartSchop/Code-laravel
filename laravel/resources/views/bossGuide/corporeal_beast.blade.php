@extends('layouts.app')
@section('content')
    @section('about')
        <h4>About the {{ $boss_info->name }}</h4>
        The Corporeal Beast is the physical incarnation of the Spirit Beast, and is a very powerful boss monster. Released on 15 September 2008, it requires completion of the quest Summer's End to fight. The Corporeal Beast was brought into existence when the Spirit Beast was killed at the end of Summer's End; as everything within the Spirit Realm represents the opposite of its version on Gielinor, the death of the Spirit Beast in the Spirit Realm caused the creation of the Corporeal Beast in Gielinor. The Corporeal Beast resides in the Gielinor version of the caverns in which the Spirit Beast was trapped and destroyed.

        With a combat level of 785, it is one of the highest-levelled monsters in the game, surpassing every God Wars Dungeon general but Nex. However, the Corporeal Beast possesses a number of formidable abilities that distinguish it from similarly-levelled boss monsters. It has very high accuracy, damage, and defence for its levels; it can devour both Summoning familiars and Legendary Pets; it has damage reduction against nearly all sources of damage; and it can summon dark energy cores with which to attack players and heal itself. The Corporeal Beast is the only monster to drop the arcane, divine, elysian, and spectral sigils, used to create the spirit shields. In addition to its sigil drops, the Corporeal Beast has many other valuable drops.

        <h4>Fighting the {{ $boss_info->name }}</h4>
        The Corporeal Beast attacks with very accurate melee and Magic attacks.
        The Corporeal Beast has three different Magic attacks and a melee attack; note that Protect from Magic and Deflect Magic do not have their full 50% reduction on them, although significantly lower the damage taken, making them still worthwhile to use.
        <ul>
            <li>
                A standard Magic attack that appears to be spiky blast of energy; this attack can hit up to approximately 4500 damage without prayer.
            </li>
            <li>
                An attack that deals damage and drains either one of these skills: Magic, Summoning or Prayer. Note that if this attack hits it drains one of those skills by a few levels/points. If the target skill is completely empty (e.g. 0/78 Summoning and the attack was to drain Summoning), the attack will instead deal a few extra points of damage. It is represented as a faint white orb with a trailing tail.
            </li>
            <li>
                An area-of-effect Magic attack that duplicates the one used by the Spirit Beast during Summer's End. A projectile that resembles a clawed hand hits the ground beneath the target and explodes, sending out smaller attacks in multiple directions. Each of these smaller attacks will only deal up to 400 damage each, but if the target is struck by the full attack, these hits can quickly add up to significant damage. Players can avoid this attack by moving away from the square in which they were standing when the attack was launched.
                The Corporeal Beast can use regular attacks even against players stood under it.
            </li>
            <li>
                Its melee attack consists of a quick swipe of its claws, or a bite attack, that can hit around 3000 damage maximum. It will only use this attack against players that are within melee distance. Protect from Melee and Deflect Melee do not seem to reduce the damage taken from melee attacks; oddly enough, Protect from Magic and Deflect Magic seem to reduce the damage from melee attacks slightly.
            </li>
        </ul>
        One offensive ability unique to the Corporeal Beast is that it has the ability to devour Summoning familiars of all types, destroying them and healing itself.

        When the life points of the beast falls, depending on the player numbers, the Corporeal Beast will summon a dark energy core that will leap about the cavern, attempting to catch players in its close-range area attack. Any player who stands on top of, or next to, the dark energy core will be dealt between 150 and 600 damage per tick, and the Corporeal Beast will be healed by the same amount. Note that although the core most commonly spawns around half health, it can spawn much earlier or later. The core can be attacked and killed while it is standing still, but it swiftly respawns. Abilities that stun will briefly stop the core from moving around.

        <h4>Setup</h4>
            For a weapons it is highly recommended you use a spear. The best spear to use is the chaotic spear, if the second best would be the zamorakian spear, any lower is not recommended.
        <h4>quick guide</h4>
        <ul>
            <li>
                Do not bring any familier, the corporeal beast will devour any familier and heal itself.
            </li>
            <li>
                Use a spear as weapons, any other weapons will deal 50% less damage.
            </li>
            <li>
                Do not walk under the corporeal beast, it will trample you.
            </li>
            <li>
                Have as much distance from your partners as possible to avoid extra damage from others.
            </li>
            <li>
                If the core is under or near you use quacke, hurricane or cleave to kill the core.
            </li>
            <li>
                Use protection from magic at any time, protection from melee does not work against the melee attacks oddly enough, Protect from Magic and Deflect Magic seem to reduce the damage from melee attacks slightly.
            </li>
        </ul>
@endsection
