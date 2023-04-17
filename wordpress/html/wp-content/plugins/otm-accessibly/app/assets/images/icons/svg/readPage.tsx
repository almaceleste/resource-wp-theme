interface Props {
  color: string | "#D0DEE6",
}
const ReadPage = (props: Props) => {
  return (
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="1" y="1" width="58" height="58" rx="4" fill="white" stroke={props.color} strokeWidth="2" />
      <g clipPath="url(#clip0)">
        <path
          d="M28.0863 21.0842V38.9534C28.0863 40.0936 26.7064 40.6553 25.9071 39.8561L21.175 35.1249H15.7467C15.0417 35.1249 14.4702 34.5533 14.4702 33.8483V26.1893C14.4702 25.4843 15.0417 24.9128 15.7467 24.9128H21.175L25.9072 20.1815C26.7055 19.3832 28.0863 19.9427 28.0863 21.0842ZM37.7694 16.9422C36.9677 16.4517 35.9199 16.7042 35.4294 17.5062C34.939 18.3081 35.1916 19.3557 35.9935 19.8462C39.4135 21.9376 41.7024 25.7097 41.7024 30.0188C41.7024 33.9245 39.7835 37.5871 36.5694 39.8164C35.797 40.3521 35.6052 41.4125 36.1409 42.185C36.6767 42.9576 37.7373 43.1491 38.5093 42.6135C42.6403 39.7483 45.1064 35.04 45.1064 30.0188C45.1064 24.5275 42.2035 19.6538 37.7694 16.9422ZM40.0003 30.0188C40.0003 26.373 38.0777 23.1163 35.1094 21.3013C34.3076 20.8109 33.2598 21.0635 32.7694 21.8655C32.279 22.6675 32.5316 23.715 33.3336 24.2054C35.3765 25.4547 36.5963 27.628 36.5963 30.0188C36.5963 32.2508 35.4997 34.3441 33.6626 35.6183C32.8903 36.154 32.6985 37.2144 33.2342 37.9868C33.5647 38.4634 34.095 38.719 34.6342 38.719C34.9804 38.7191 35.3185 38.6132 35.6027 38.4153C38.3563 36.5053 40.0003 33.3663 40.0003 30.0188ZM34.8944 30.0188C34.8944 28.2255 33.9802 26.5962 32.4492 25.6604C31.6472 25.1704 30.5995 25.423 30.1093 26.2251C29.6192 27.0271 29.872 28.0746 30.674 28.5649C31.1853 28.8773 31.4903 29.4208 31.4903 30.0188C31.4902 30.2943 31.4233 30.5654 31.2955 30.8094C31.1676 31.0533 30.9826 31.2625 30.7561 31.4194C29.9838 31.9549 29.7917 33.0154 30.3271 33.7879C30.8627 34.5605 31.9233 34.7525 32.6956 34.2169C34.0724 33.2624 34.8944 31.6931 34.8944 30.0188Z"
          fill={props.color} />
      </g>
      <defs>
        <clipPath id="clip0">
          <rect width="31.3433" height="31.3433" fill="white" transform="translate(14.3274 14.3281)" />
        </clipPath>
      </defs>
    </svg>
  )
}
export default ReadPage;
