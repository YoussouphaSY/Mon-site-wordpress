<?php
namespace FL\Assistant\Hooks\Filters;

/**
* Called on the heartbeat_received action.
*/
class OnFLBuilderUIBarButtons {
	/**
	* @param $buttons Array
	*
	* @return Array
	*/
	public function __invoke( $buttons ) {

		// Check build supports flag
		if ( ! FL_ASST_SUPPORTS_BB ) {
			return $buttons;
		}

		// Check if BB supports assistant (2.4+)
		if (
			! version_compare( FL_BUILDER_VERSION, '2.4.2', '>=' ) &&
			'{FL_BUILDER_VERSION}' !== FL_BUILDER_VERSION
		) {
			return $buttons;
		}

		$icon = '<svg width="25" height="25" viewBox="-2 -1 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.6717 2.56042C11.2606 1.14932 8.9728 1.14928 7.56173 2.56035L2.54518 7.57689C1.13953 8.98254 1.13953 11.2616 2.54522 12.6673C4.53263 14.6547 7.2139 17.336 8.79474 18.9168C9.64119 19.7633 10.7892 20.2388 11.9864 20.2388C13.8529 20.2388 16.6977 20.2388 18.5108 20.2388C18.9677 20.2388 19.4058 20.0574 19.7289 19.7343C20.052 19.4111 20.2335 18.973 20.2335 18.5161C20.2335 16.8138 20.2335 14.2023 20.2335 12.3446C20.2335 10.9215 19.6681 9.55678 18.6619 8.55058L12.6717 2.56042Z" fill="#FFAD3B"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.2755 20.239C18.6034 20.239 18.8991 20.0415 19.0246 19.7384C19.1501 19.4354 19.0809 19.0867 18.849 18.8547C15.1069 15.1109 5.06607 5.06498 5.06607 5.06498C4.22232 5.90873 3.37757 6.7513 2.53174 7.59277L15.178 20.239C15.178 20.239 16.8537 20.239 18.2755 20.239Z" fill="#FE8300"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.2397 15.1772L7.59351 2.53102C8.26243 1.85863 9.17143 1.48005 10.1199 1.47882C11.0684 1.4776 11.9783 1.85383 12.649 2.5245C14.5064 4.38184 16.9745 6.84998 18.5845 8.46002C19.6443 9.51979 20.2397 10.9572 20.2397 12.456C20.2397 13.7817 20.2397 15.1772 20.2397 15.1772Z" fill="#FDC950"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.223 10.8485C20.2112 10.7262 20.1298 10.6216 20.0142 10.5802C19.8985 10.5387 19.7693 10.5677 19.6824 10.6546C18.082 12.2564 12.176 18.1688 10.6277 19.7187C10.5469 19.7996 10.5196 19.9196 10.5574 20.0275C10.5952 20.1354 10.6914 20.2121 10.805 20.2249C10.8871 20.2339 10.97 20.2385 11.0533 20.2385C12.9851 20.2385 17.3892 20.2385 19.3092 20.2384L20.2327 19.3148C20.2328 17.3948 20.2329 12.9907 20.2328 11.059C20.2328 10.9884 20.2295 10.9183 20.223 10.8485Z" fill="#F8C978"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.2245 10.8567C20.213 10.7332 20.1311 10.6274 20.0142 10.5853C19.8975 10.5432 19.767 10.5724 19.6792 10.6602C18.1254 12.2155 12.6428 17.7039 12.6428 17.7039L15.179 20.24C16.764 20.24 18.3486 20.24 19.3101 20.2399C19.5551 20.24 19.79 20.1427 19.9631 19.9696C20.1364 19.7963 20.2337 19.5614 20.2336 19.3164C20.2337 17.3964 20.2338 12.9923 20.2337 11.0605C20.2337 10.9923 20.2306 10.9243 20.2245 10.8567Z" fill="#FAA849"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.2245 10.8601C20.2132 10.7355 20.1307 10.6288 20.0131 10.5863C19.8955 10.5437 19.7639 10.573 19.6755 10.6614C18.4954 11.8425 15.1695 15.1721 15.1695 15.1721C15.1695 15.1721 18.4443 18.4484 19.5801 19.585C19.6894 19.6943 19.854 19.7271 19.997 19.6679C20.14 19.6088 20.2332 19.4692 20.2332 19.3146L20.2331 19.3145C20.2332 17.3945 20.2332 12.9904 20.2332 11.0586C20.2332 10.9921 20.2303 10.9258 20.2245 10.8601Z" fill="#FFCC7A"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.225 10.8731C20.2142 10.7461 20.1308 10.637 20.0112 10.5934C19.8916 10.5496 19.7574 10.5793 19.6674 10.6695C18.9842 11.3531 17.7011 12.6376 17.7011 12.6376L20.2326 15.1789C20.2326 13.6005 20.2326 12.0223 20.2326 11.0589C20.2326 10.9967 20.23 10.9347 20.225 10.8731Z" fill="#FFE09D"/>
<path d="M11.3557 3.47745C11.4294 3.50305 11.4983 3.53859 11.5603 3.59201L11.5767 3.61141C11.593 3.63467 11.6129 3.65711 11.6281 3.68271L11.6491 3.72584C11.6795 3.7989 11.6912 3.87827 11.6877 3.9567C11.6877 3.9567 11.6795 4.05477 11.6526 4.13613C11.6433 4.16547 11.6328 4.19434 11.6199 4.22251C11.6187 4.22555 11.6047 4.25653 11.593 4.27944C11.5474 4.36465 11.4855 4.43982 11.4235 4.51369L10.9291 5.02473L11.7169 5.87746C11.8245 6.01001 11.9215 6.15261 11.9589 6.33415C11.9811 6.44461 11.9776 6.56232 11.9308 6.66694C11.9226 6.68646 11.9074 6.71252 11.9074 6.71252C11.9039 6.71661 11.8794 6.74958 11.8642 6.77108L11.8467 6.79189L11.8221 6.81282C11.7438 6.86963 11.6538 6.91475 11.5451 6.92094C11.3534 6.93205 11.1652 6.84917 11.0167 6.73719C10.9863 6.71428 10.9571 6.6902 10.9279 6.66612L10.091 5.89288L8.52463 7.51346L10.1447 9.23643L10.8905 8.51896L10.8963 8.51486C11.0214 8.40908 11.1629 8.31568 11.3312 8.28435C11.3674 8.27769 11.4025 8.27676 11.4387 8.2736L11.4749 8.27419C11.5731 8.28541 11.6737 8.31369 11.7637 8.38079C11.7789 8.39131 11.7976 8.40908 11.7976 8.40908C11.8584 8.48027 11.9063 8.56104 11.9226 8.66262C11.9226 8.66262 11.9297 8.70844 11.9297 8.75099C11.9297 8.75099 11.9297 8.80031 11.9238 8.84181C11.9004 9.01142 11.8104 9.16548 11.6959 9.29675C11.69 9.30376 11.6842 9.31019 11.6842 9.31019L10.9408 10.0833L11.7905 10.9866C11.8817 11.095 11.9682 11.2066 12.0255 11.3408C12.0314 11.3529 12.036 11.3649 12.0407 11.3769C12.0676 11.4452 12.0863 11.5167 12.0933 11.5897C12.0933 11.5897 12.0956 11.7226 12.0793 11.783C12.0793 11.783 12.0571 11.853 12.0349 11.889C12.022 11.9103 12.0068 11.9292 11.9916 11.9495L11.9729 11.9727L11.946 11.9953C11.946 11.9961 11.9449 11.9968 11.9437 11.9976C11.9414 11.9989 11.9402 12.0002 11.9379 12.0015C11.8888 12.0402 11.8326 12.0702 11.7684 12.0851C11.5042 12.1471 11.2248 12.0032 11.0378 11.8429C11.0191 11.827 11.0015 11.8108 10.9817 11.7951L10.0968 10.9619L8.53865 12.5819L11.7321 15.9038C11.8689 16.0654 11.9974 16.2385 12.0302 16.4867C12.0454 16.5965 12.036 16.7094 11.9905 16.8099C11.9905 16.8099 11.946 16.8831 11.9121 16.9304L11.8841 16.9603C11.6363 17.1779 11.2681 17.0897 11.0401 16.9422C10.9712 16.8975 10.908 16.8442 10.8449 16.7911L7.54275 13.6171L5.91913 15.3061C7.0144 16.4037 8.1085 17.5025 9.20961 18.5917C9.2739 18.6553 9.33701 18.7201 9.40481 18.7795C9.67249 19.0145 9.98576 19.1957 10.299 19.3459C10.7713 19.5722 11.2903 19.7142 11.8186 19.7149L11.835 19.7157C11.8829 19.7203 11.8841 19.7189 11.9308 19.7277C11.9799 19.7418 12.0313 19.7573 12.0769 19.7838C12.0769 19.7838 12.1179 19.809 12.1494 19.8354C12.2546 19.9249 12.3224 20.055 12.3364 20.1953C12.3388 20.2187 12.3388 20.2194 12.3388 20.2287C12.3434 20.371 12.2862 20.5111 12.1868 20.6096C12.1868 20.6096 12.1459 20.6486 12.1085 20.6736C12.0115 20.7381 11.8934 20.7654 11.7765 20.7637C10.7491 20.7495 9.73912 20.3488 8.9127 19.7235C8.79464 19.6348 8.68008 19.542 8.57605 19.438L3.91328 14.7795L3.90159 14.767L3.86185 14.7186C3.82912 14.6717 3.80105 14.6222 3.78352 14.5684C3.78352 14.5684 3.77185 14.5255 3.76717 14.5008C3.766 14.4885 3.76365 14.4713 3.76365 14.4713C3.75898 14.4257 3.75897 14.3794 3.76598 14.334C3.76598 14.334 3.78352 14.2429 3.81858 14.1724C3.91327 13.9848 4.12368 13.8651 4.34694 13.891C4.3598 13.8927 4.37265 13.8944 4.38551 13.8962L4.41941 13.904C4.49539 13.9295 4.56669 13.9645 4.63098 14.0189C4.63565 14.0235 4.64034 14.0274 4.64034 14.0274L4.65319 14.0387C4.71514 14.1004 4.7771 14.1621 4.83789 14.2239L4.8975 14.2826L6.56552 12.6778L4.99453 11.1668L3.4422 12.7728L3.64092 12.9939C3.65728 13.0143 3.66079 13.0184 3.66664 13.0278C3.67716 13.0415 3.68651 13.0554 3.69586 13.0695C3.75431 13.1582 3.79521 13.2592 3.80457 13.3648C3.81742 13.506 3.78352 13.6534 3.68884 13.7645C3.67598 13.7797 3.65845 13.7999 3.65845 13.7999L3.65027 13.8093L3.63157 13.8252C3.62806 13.8284 3.62806 13.8284 3.62339 13.8315C3.54507 13.8931 3.45389 13.9385 3.3522 13.9523C3.1827 13.9752 3.00504 13.9212 2.87412 13.8126C2.86243 13.8018 2.84957 13.7909 2.83671 13.7803L2.07224 13.0417C2.0664 13.0354 2.05938 13.0291 2.05237 13.0226C2.04418 13.0149 2.03601 13.0072 2.02782 12.9994C1.39194 12.3838 0.968789 11.558 0.827351 10.7041C0.737345 10.1702 0.751374 9.61902 0.870603 9.09125C1.00503 8.48798 1.28089 7.91673 1.65728 7.4293C1.67364 7.40767 1.69469 7.38219 1.69702 7.37892C1.70404 7.37073 1.71105 7.36267 1.7169 7.3546C1.79405 7.26319 1.8747 7.17482 1.95769 7.08985L2.7093 6.32888C3.82677 5.21293 4.93958 4.09674 6.07109 2.98943C6.42176 2.646 6.77945 2.31006 7.13948 1.97283C7.13948 1.97283 7.18389 1.93157 7.22831 1.893C7.92848 1.27721 8.83906 0.901996 9.76601 0.843083C10.2312 0.808834 10.707 0.858041 11.1593 0.988141C11.9367 1.21175 12.6322 1.67394 13.2178 2.23572C13.6748 2.67476 14.1132 3.12947 14.5539 3.57915C15.4551 4.49954 16.3458 5.4252 17.2505 6.34221L17.2482 6.33988L17.2657 6.35823C17.3207 6.42661 17.3698 6.50247 17.3943 6.58792C17.4376 6.74221 17.4189 6.91533 17.323 7.05361C17.3066 7.07722 17.2868 7.09932 17.2681 7.12188L17.2459 7.14596C17.1968 7.19084 17.1418 7.22976 17.0822 7.25595C16.8742 7.34595 16.6182 7.29709 16.4522 7.1366C16.1564 6.8508 15.8677 6.55577 15.5743 6.26366C14.7573 5.44847 13.9425 4.62988 13.1231 3.82298C12.5387 3.24834 11.9788 2.6418 11.2213 2.32596C10.8063 2.15319 10.354 2.07453 9.90744 2.1131C9.46092 2.15191 9.02959 2.3152 8.65554 2.55986L10.1553 4.18698L10.6333 3.72573C10.6333 3.72573 10.6778 3.68622 10.7233 3.65115C10.8449 3.5553 10.9887 3.48259 11.1442 3.46646C11.1558 3.46518 11.1675 3.46424 11.1792 3.46319C11.1851 3.46261 11.1921 3.46179 11.1921 3.46179L11.2295 3.4612L11.3113 3.4681C11.3265 3.47126 11.3405 3.47441 11.3557 3.47745ZM6.08862 10.0336L7.63859 11.646L9.21429 10.1318L7.52754 8.54549C7.04829 9.04158 6.56904 9.53754 6.08862 10.0336ZM2.53513 8.80335C2.08277 9.59213 2.02081 10.608 2.43928 11.4818C2.45682 11.5184 2.47552 11.5545 2.49422 11.5904L3.9612 10.1733L2.53513 8.80323C2.53513 8.80323 2.53513 8.80324 2.53513 8.80335ZM4.99569 6.21094C4.56319 6.64496 4.12952 7.07722 3.69468 7.50832L3.67833 7.52538L5.13361 9.0397L6.57372 7.64847L5.01907 6.18686C5.01089 6.19493 5.00387 6.20299 4.99569 6.21094ZM7.58599 3.58172C7.1231 4.06997 6.64969 4.54315 6.17862 5.01901L7.66197 6.59657L9.2213 5.09007L7.58715 3.58102C7.58599 3.58125 7.58599 3.58149 7.58599 3.58172Z" fill="#505153"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.9441 7.31934C17.9815 7.31969 18.0177 7.32425 18.0539 7.32927L18.0867 7.33687C18.1638 7.36235 18.234 7.39766 18.3018 7.45505C18.3053 7.45774 18.3053 7.45774 18.3088 7.46054L18.3216 7.47176C18.7167 7.86755 19.1235 8.2457 19.4683 8.69713C20.068 9.4817 20.4771 10.4068 20.6548 11.3759C20.7214 11.7468 20.7553 12.1212 20.7565 12.4994C20.7565 14.4199 20.7635 16.3363 20.7576 18.2473C20.7565 18.5769 20.7623 18.9033 20.67 19.2214C20.5776 19.5364 20.4151 19.8297 20.1919 20.0703C19.8026 20.492 19.2415 20.7502 18.6606 20.7631C18.5542 20.7655 18.4479 20.7639 18.3415 20.764C16.9376 20.7658 15.5303 20.764 14.1334 20.764H13.473L13.4555 20.7632L13.3935 20.7575L13.3596 20.7513C13.3479 20.7479 13.3432 20.7476 13.3164 20.7399C13.2708 20.7265 13.2264 20.7047 13.1866 20.6782C13.1866 20.6782 13.1375 20.6443 13.1024 20.6095C13.0522 20.5578 13.0113 20.4959 12.9855 20.4283L12.9704 20.3839C12.9704 20.3839 12.9622 20.3579 12.9587 20.3357C12.9587 20.3357 12.9481 20.2713 12.9493 20.2281C12.9505 20.1399 12.9774 20.0523 13.0218 19.9766C13.0218 19.9766 13.0557 19.9224 13.0943 19.8817C13.1796 19.7911 13.2965 19.7294 13.4227 19.7199C13.4367 19.7189 13.4555 19.7176 13.4555 19.7176L13.4718 19.7169C13.9557 19.7169 14.4397 19.7168 14.9236 19.7168L16.2982 19.7167L19.7126 16.2991C19.7126 15.0324 19.7091 13.7658 19.7091 12.5009C19.7056 11.8397 19.5829 11.194 19.3444 10.5875C19.0849 9.9246 18.6852 9.32226 18.1954 8.82665L18.1813 8.81274L17.5805 8.21227L17.57 8.19976C17.556 8.1834 17.5408 8.16773 17.5279 8.15055C17.5279 8.15055 17.494 8.10227 17.4742 8.0582C17.4403 7.98187 17.4251 7.89748 17.4298 7.81414C17.4298 7.81414 17.4333 7.76831 17.4414 7.72728C17.4905 7.50437 17.6998 7.32214 17.9347 7.31934C17.9382 7.31934 17.9417 7.31934 17.9441 7.31934Z" fill="#505153"/>
</svg>
';

		$buttons['fl-assistant'] = [
			'label' => $icon,
			'title' => __( 'Assistant', 'assistant' ),
			'class' => 'fl-builder-button-silent',
		];
		return $buttons;
	}
}
